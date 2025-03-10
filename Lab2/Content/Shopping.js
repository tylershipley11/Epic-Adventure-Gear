var currentItem; // refers to currently selected list item (<li> element)

/* init function is invoked when the body of page has completely loaded */
function init()
{
  // assign all list items to the unselected class by default
  var listItems = document.querySelectorAll('li');
  var i;
  for (i = 0; i < listItems.length; i++)
  {
    listItems[i].className = 'unselected'; // change class to selected
  }
  
  var glist = document.getElementById("glist");
  // initialize currentItem to the last item and select it
  currentItem = glist.lastChild;
  currentItem.className = 'selected';
}

function scrollUp(){
  var previousItem = currentItem.previousElementSibling;
  var glist = document.getElementById("glist");

  if (previousItem){
    currentItem.className = 'unselected';
    currentItem = previousItem;
    currentItem.className = 'selected';
  }
  else{
    currentItem.className = 'unselected';
    currentItem = glist.lastElementChild;
    currentItem.className = 'selected';
  }
}

function scrollDown(){
  var nextItem = currentItem.nextElementSibling;
  var glist = document.getElementById("glist");

  if (nextItem){
    currentItem.className = 'unselected';
    currentItem = nextItem;
    currentItem.className = 'selected';
  }
  else{
    currentItem.className = 'unselected';
    currentItem = glist.firstElementChild;
    currentItem.className = 'selected';
  }
}

function moveFirst(){
  var glist = document.getElementById("glist");
  var firstItem = glist.firstElementChild;

  if (currentItem !== firstItem){
    glist.insertBefore(currentItem, firstItem);
  }
  else{
    alert("This item is already at the top of the list");
  }
}

function moveLast(){
  var glist = document.getElementById("glist");
  var lastItem = glist.lastElementChild;

  if(currentItem !== lastItem){
    glist.appendChild(currentItem);
  }
  else{
    alert("This item is already at the bottom of the list")
  }
}

function addItem(){
  var inputField = document.querySelector('#addgroup input[type="text"]');
  var newItemText = inputField.value.trim();

  if(newItemText === ""){
    alert("Please enter a product name to add.");
    return; 
  }

  var newItem = document.createElement("li");
  newItem.textContent = newItemText;
  newItem.className = 'unselected';

  var glist = document.getElementById("glist");
  glist.appendChild(newItem);

  if(currentItem){
    currentItem.className = 'unselected';
  }


  currentItem = newItem;
  currentItem.className = 'selected';

  inputField.value = "";
}

function removeItem(){
  var glist = document.getElementById("glist");

  if (!currentItem) {
    alert("Item must be selected to remove.");
    return;
  }

  var newCurrent = null;
  var previousItem = currentItem.previousElementSibling;
  var nextItem = currentItem.nextElementSibling;

  glist.removeChild(currentItem);

  if (previousItem) {
    newCurrent = previousItem;
    newCurrent.className = 'selected';
  } else if (nextItem) {
    newCurrent = nextItem;
    newCurrent.className = 'selected';
  } else {
    alert("No more items are in this List");
  }
  
  currentItem = newCurrent;
}

