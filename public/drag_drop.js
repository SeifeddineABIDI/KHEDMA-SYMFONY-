  function drag(event) {
    event.dataTransfer.setData("text/plain", event.target.dataset.taskId);
  }

  function allowDrop(event) {
    if (!event.target.classList.contains('tache')) {
        event.preventDefault();
      }
  }

  function dragEnter(event) {
    event.target.classList.add("over");
  }

  function dragLeave(event) {
    event.target.classList.remove("over");
  }

  function drop(event) {
    event.preventDefault();

    var taskId = event.dataTransfer.getData("text/plain");
    var taskElement = document.querySelector("[data-task-id='" + taskId + "']");
    var dropTarget = event.target;
    var data = event.dataTransfer.getData("text");
    var status = event.target.getAttribute("data-status");
    var tache_id = taskElement.getAttribute('data-task-id');
  
    // Check if the drop target is a task element
    if (dropTarget.classList.contains("tache")) {
        dropTarget = dropTarget.parentNode;
    } else if (!dropTarget.classList.contains("column")) {
        // Not a valid drop target
        return;
    }
    
    // Remove the task from its current parent
    taskElement.parentNode.removeChild(taskElement);
  
    // Append the task to the drop target
    dropTarget.appendChild(taskElement);
  
    // Send a POST request to update the task status
    var formData = new FormData();
    formData.append('tache_id', + taskId);
    formData.append('new_status', status);
    
  
    fetch('/update_tache_status', {
      method: 'POST',
      body: formData
    })
      .then(function(response) {
        if (response.ok) {
          taskElement.setAttribute('data-status', status);
        } else {
          console.error('Error updating task status');
        }
      })
      .catch(function(error) {
        console.error('Error updating task status', error);
      });
  }
  