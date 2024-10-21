let taskList = []

const createTask = function(text){
    return {
        done: false,
        text: text,
        create: new Date()
    }
}


const addTask = function() {
    let task = createTask(taskElement.value)
    taskList.push(task)
    console.log(taskList)

}

const taskElement = document.getElementById('task')
const addButtonE1 = document.getElementById('addButton')
addButtonE1.onclick = addTask
