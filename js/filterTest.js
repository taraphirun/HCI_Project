// Animations
const fadeIn = item => {
  $(item).animate(
    {
      opacity: 0,
    },
    500,
    function() {
      $(this).animate(
        {
          opacity: 1,
        },
        500,
      );
    },
  );
};

// Stream Data Retrieval
const getStreamData = () => {
  var streamChannels = [
    'ESL_SC2',
    'OgamingSC2',
    'cretetion',
    'freecodecamp',
    'storbeck',
    'habathcx',
    'RobotCaleb',
    'noobs2ninjas',
  ];

  var streamArray = [];
  var promises = streamChannels.map(user =>
    fetch(`https://wind-bow.glitch.me/twitch-api/channels/${user}`).then(y =>
      y.json(),
    ),
  );

  Promise.all(promises).then(results => {
    generateListGroup(results, streamChannels);
  });
};

// List-group-item generation
const generateListGroup = (array, users) => {
  $('.list-group').css('opacity', 0);
  var buffer = '';
  for (var i = 0; i < array.length; i++) {
    if (array[i].status) {
      buffer += `<a href='https://www.twitch.tv/${array[i].name}'
      class='list-group-item list-group-item-action list-group-item-success' target='_blank'>
                  <img src=${array[i].logo} alt="cat" class="list-group-image">
                  <h5>${array[i].display_name}</h5>
                  <p>${array[i].game} - ${array[i].status}</p></a>`;
    } else {
      buffer += `<a href='https://www.twitch.tv/${array[i].name}'
      class='list-group-item list-group-item-action list-group-item-danger' target='_blank'>
                  <img src="https://image.ibb.co/d6Pi95/twitch_offline.png" alt="cat" class="list-group-image">
                  <h5>${array[i].display_name}</h5>
                  <p style="font-style: italic">Offline</p></a>`;
    }
    $('.list-group').html(buffer);
    // console.log(array[i]);
  }
  fadeIn('input');
  fadeIn('.btn');
  fadeIn('.btn-group');
  fadeIn('.list-group');
};

// Filter input function
const filter = () => {
  var input, filter, table, item, p, h5, i;
  input = document.getElementById('filter-bar');
  filter = input.value.toUpperCase();
  item = document.getElementsByClassName('list-group-item-action');
  for (i = 0; i < item.length; i++) {
    p = item[i].getElementsByTagName('p')[0];
    h5 = item[i].getElementsByTagName('h5')[0];
    if (p || h5) {
      if (
        p.innerHTML.toUpperCase().indexOf(filter) > -1 ||
        h5.innerHTML.toUpperCase().indexOf(filter) > -1
      ) {
        item[i].style.display = '';
      } else {
        item[i].style.display = 'none';
      }
    }
  }
};

// All Streams callback
const onOff = () => {
  document.getElementById('option1').blur();
  var item;
  item = document.getElementsByClassName('list-group-item-action');
  for (i = 0; i < item.length; i++) {
    $(item[i]).slideDown();
  }
};

// Online Streams callback
const online = () => {
  document.getElementById('option2').blur();
  onOff();
  var input, item, p, h5, i;
  input = document.getElementById('filter-bar');
  item = document.getElementsByClassName('list-group-item-action');
  for (i = 0; i < item.length; i++) {
    p = item[i].getElementsByTagName('p')[0];
    if (p.innerHTML.toUpperCase() === 'OFFLINE') {
      $(item[i]).slideUp();
    }
  }
};

// Offline Streams callback
const offline = () => {
  document.getElementById('option3').blur();
  onOff();
  var input, item, p, h5, i;
  input = document.getElementById('filter-bar');
  item = document.getElementsByClassName('list-group-item-action');
  for (i = 0; i < item.length; i++) {
    p = item[i].getElementsByTagName('p')[0];
    if (p.innerHTML.toUpperCase() !== 'OFFLINE') {
      $(item[i]).slideUp();
    }
  }
};

// On document ready
$(document).ready(function() {
  getStreamData();
});
