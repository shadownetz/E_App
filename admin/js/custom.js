$(document).ready(function () {
     // Load content of dashboard automatically when page loads
    $('.ex-content').load("includes/frames/dash-content.php");

    // Load content of dashboard
    $('.dash').click(function () {
        $('.ex-content').load("includes/frames/dash-content.php");
    });
    // Load content of set students page
    $('.set-stud').click(function () {
        $('.ex-content').load("includes/frames/set-students.php");
    });
     // Load content of set test page
     $('.set-test').click(function () {
        $('.ex-content').load("includes/frames/set-test.php");
     });
    // Load content of set Practical page
    $('.set-practical').click(function () {
        $('.ex-content').load("includes/frames/set-practical.php");
    });
    // Load content of upload tutorial page
    $('.set-tutorial').click(function () {
        $('.ex-content').load("includes/frames/set-tutorial.php");
    });
    // Load content of account page
    $('.shw-acc').click(function () {
        $('.ex-content').load("includes/frames/profile.php");
    });
   
})