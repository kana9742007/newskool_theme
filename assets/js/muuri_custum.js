
$(function(){
    var grid = new Muuri('.grid', {
    sortData: {
      all: function (item, element) {
      return parseFloat(element.children[0].getAttribute('data-all'));
    },
      active: function (item, element) {
      return parseFloat(element.children[0].getAttribute('data-active'));
    },
      kids: function (item, element) {
      return parseFloat(element.children[0].getAttribute('data-kids'));
    },
      rerax: function (item, element) {
      return parseFloat(element.children[0].getAttribute('data-rerax'));
    },
      summer: function (item, element) {
      return parseFloat(element.children[0].getAttribute('data-summer'));
    },
  }
  });

    $('.list-btn li.sort-all').click(function(){
        grid.filter('.all');
        return false;
    });
    $('.list-btn li.sort-active').click(function(){
        grid.filter('.active');
      return false;
    });
    $('.list-btn li.sort-kids').click(function(){
        grid.filter('.kids');
      return false;
    });
    $('.list-btn li.sort-rerax').click(function(){
        grid.filter('.rerax');
      return false;
    });
    $('.list-btn li.sort-summer').click(function(){
        grid.filter('.summer');
      return false;
    });



    $('.0').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.1,.2,.3,.4').removeClass('active');
      }
    });
    $('.1').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.0,.2,.3,.4').removeClass('active');
      }
    });
    $('.2').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.0,.1,.3,.4').removeClass('active');
      }
    });
    $('.3').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.0,.1,.2,.4').removeClass('active');
      }
    });
    $('.4').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.0,.1,.2,.3').removeClass('active');
      }
    });
});