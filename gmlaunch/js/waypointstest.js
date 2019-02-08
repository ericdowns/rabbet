function plumbInit(){
  
  setupHeader();
  setupMouseEvents();
  setupSearch();
  setupRandomizer();
  randomizerNumberTicker();
  setupTabs();
  setupResourceSelects();
  setupJobAlerts();
  setupSaveSearch();
  setupJobNumberSearch();
  setupApplicationTimeSaver();
  
}


function setupMouseEvents(){


var counter1 = new CountUp("counter1", 0, 15000, 0, 5, {
  useEasing: true,
  useGrouping: true,
  separator: ',',
  decimal: '.',
  prefix: '$'
});


var counter2 = new CountUp("counter2", 10, 0, 0, 10, {
  useEasing: false,
  useGrouping: true
});



var waypoint1 = new Waypoint({
  element: document.getElementById('waypoint1'),
  handler: function handler(direction) {

    if (direction == "up") {
      counter1.reset();
    } else {
      counter1.start();
    }
  },
  offset: '50%'
});


var waypoint1 = new Waypoint({
  element: document.getElementById('waypoint2'),
  handler: function handler(direction) {
    if (direction == "up") {
      counter2.reset();
    } else {
      counter2.start();
    }
  },
  offset: '50%'
});



}



