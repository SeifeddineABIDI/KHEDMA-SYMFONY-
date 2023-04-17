<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;


class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private $entityManager;
    private $urlGenerator;
    private $csrfTokenManager;
    private $passwordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        CsrfTokenManagerInterface $csrfTokenManager,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * Should this authenticator be used for this request
     * 
     * @param Request $request
     * @return bool|void
     */
    public function supports(Request $request): bool
    {
        //return self::LOGIN_ROUTE === $request->attributes->get('_route') && $request->isMethod('post');
        return $request->isMethod('POST') && $this->getLoginUrl($request) === $request->getRequestUri();
    }

    public function getCredentials(Request $request)
    {
        $credentials = [
            'email'       => $request->request->get('email'),
            'password'    => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token')
        ];

        $request->getSession()->set(Security::LAST_USERNAME, $credentials['email']);

        return $credentials;
    }

    /**
     * 
     * @param array $credentials
     * @param UserProviderInterface $userProvider
     * @return object|UserInterface|null
     */
    public function getUser($credentials)
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $credentials['email']])
            ?? throw new UserNotFoundException();

        return $user;
    }

    /**
     * check credentials 
     * 
     * check csrf token is valid
     * 
     * check password is valid
     * 
     * @param array $credentials
     * @param UserInterface $user
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        return $this->passwordHasher->isPasswordValid($user, $credentials['password']);
    }

    public function authenticate(Request $request): Passport
    {
        $credentials = $this->getCredentials($request);
        $user = $this->getUser($credentials);
        if (!$user->isVerified() || $user->IsArchive()) {
            throw new AuthenticationException();
        }

        $this->checkCredentials($credentials, $user);

        return new Passport(
            new UserBadge($credentials['email']),
            new PasswordCredentials($credentials['password']),
            [
                new CsrfTokenBadge(
                    'authenticate',
                    $credentials['csrf_token']
                ),
                new RememberMeBadge(),
            ],
        );
    }

    /**
     * 
     * what should happen once the user is authenticated 
     * 
     * @param Request $request
     * @param TokenInterface $token
     * @param string $providerKey
     * @return Response|void|null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // if($token->getUser()->isAdmin())
        // {
        //     return new RedirectResponse($this->urlGenerator->generate("admin_dashboard"));
        // }

        return new RedirectResponse($this->urlGenerator->generate('app_home_page'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
