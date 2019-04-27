// Control Auto Scroll to div contents on homepage
$('#about').click(function () {
    $('#feature-block')[0].scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
})
  
$('#home').click(function () {
    $('#home-block')[0].scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
})
  
$('#courses').click(function () {
  $('#courses-block')[0].scrollIntoView({
    behavior: "smooth",
    block: "start"
  });
})

$('#help').click(function () {
  $('#help-block')[0].scrollIntoView({
    behavior: "smooth",
    block: "start"
  });
})