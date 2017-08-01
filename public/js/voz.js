if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'inicio': function() {

    	window.location = "/";
      //$('#tpsreport').animate({bottom: '-100px'});
    }
    'login': function() {

    	window.location = "sesion";
      //$('#tpsreport').animate({bottom: '-100px'});
    }
  };

  annyang.addCommands(commands);

    annyang.start();
}