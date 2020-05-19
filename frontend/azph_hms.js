$(document).ready(function() {
    $("#residentbtn").click(function() {
        //console.log("button loaded");
        $(".log-in-card").hide();
        $(".submit-button").click(function(event) {
            event.preventDefault();
            let resident_id = $("#name").val();
            let resident_password = $("#email").val();

            $.ajax("backend/login.php", {
                    type: "POST",
                    data: {
                        residentID: resident_id,
                        residentPass: resident_password,
                    },
                })
                .done(function(response) {
                    console.log(response);
                    console.log("came back");
                    if (response === "<script> alert('User not found');</script>") {
                        $("#alertbox").html(response);
                        $(".w-form-fail").show();
                    }
                    if (
                        response === "<script>alert('Logged in successfully!');</script>"
                    ) {
                        $("#alertbox").html(response);
                        //window.location.replace("confirmation.php");
                        window.location.replace("confirmation.php");
                    }
                    if (
                        response ===
                        "<script>alert('Username or password incorrect!');</script>"
                    ) {
                        $("#alertbox").html(response);
                        $(".w-form-fail").show();
                    }
                    /*else {
                                       //$('#alertbox').html(response);
                                       $('.w-form-fail').show();
                                   }*/
                })
                .fail(function() {
                    alert("Something went wrong with a request to the server");
                });
        });
    });

    $("#continue-button").click(function() {
        window.location.replace("old-home.php");
    });

    $(".sign-out").click(function() {
        window.location.replace("index.php");
    });

    $("#log-issue").click(function() {
        window.location.replace("log-issue.php");
    });

    $("#track-issue").click(function() {
        window.location.replace("track-issue.php");
    });

    $("#track-issue-1").click(function(event) {
        event.preventDefault();
        let idnum = $("#track-idNum").val();
        //console.log(idnum);
        $.ajax("backend/show-issues.php", {
                type: "POST",
                data: {
                    IDnum: idnum,
                },
            })
            .done(function(response) {
                //alert(response);
                $("#show-issues-1").html(response);
            })
            .fail(function() {
                alert("Something went wrong with the server");
            });
    });

    /*$('.w-nav-menu').click(function(){
          $('.w-nav-menu').show();
      });*/

    $("#submit-issue").click(function(event) {
        event.preventDefault();
        let clust = $("#cluster").val();
        let cat = $("#classification").val();
        let desc = $("#Issue-description").val();
        let idN = $("#IDapp").val();
        /*console.log(clust);
            console.log(cat);*/
        //console.log(desc);
        //console.log(idN);
        $.ajax("backend/res-sub-issue.php", {
                type: "POST",
                data: {
                    residentID: idN,
                    cluster: clust,
                    classification: cat,
                    description: desc,
                },
            })
            .done(function(response) {
                console.log(response);
                if (response === "FAILED") {
                    $(".w-form-fail").show();
                } else {
                    $(".w-form-done").show();
                    //window.location.replace("../old-home.php");
                    window.location.replace("old-home.php");
                }
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
                $(".w-form-fail").show();
            });
    });

    $("#adminbtn").click(function() {
        console.log("was here");
        $(".log-in-card").hide();
        $(".submit-button").click(function(event) {
            event.preventDefault();
            let admin_id = $("#name").val();
            let admin_password = $("#email").val();
            //console.log('hello');
            $.ajax("backend/login-admin.php", {
                    type: "POST",
                    data: {
                        adminID: admin_id,
                        adminPass: admin_password,
                    },
                })
                .done(function(response) {
                    console.log(response);
                    if (response === "<script> alert('User not found');</script>") {
                        $("#alertbox").html(response);
                        $(".w-form-fail").show();
                    }
                    if (
                        response === "<script>alert('Logged in successfully!');</script>"
                    ) {
                        $("#alertbox").html(response);
                        window.location.replace("admin.php");
                    }
                    if (
                        response ===
                        "<script>alert('Username or password incorrect!');</script>"
                    ) {
                        $("#alertbox").html(response);
                        $(".w-form-fail").show();
                    }
                })
                .fail(function() {
                    alert("Something went wrong with a request to the server");
                });
        });
    });

    /*$('#add-feedback-track-0').click(function (event) {
          event.preventDefault();
          console.log('testing feedback');
      });
      var tracks = document.getElementsByClassName("add-feedback-track");
      for (var i = 0; i < tracks.length; i++) {
          tracks.item[i].click(function (event) {
              event.preventDefault();
              console.log('here');
          })
      }*/

    $("#give-feedback").click(function(event) {
        event.preventDefault();
        let Iid = $("#isseue-id").val();
        let Id = $("#ID-number").val();
        let desc = $("#Issue-description").val();
        $.ajax("give-feedback.php", {
                type: "POST",
                data: {
                    issueID: Iid,
                    ID: Id,
                    description: desc,
                },
            })
            .done(function(response) {
                console.log(response);
                if (response === "FAILED") {
                    $(".w-form-fail").show();
                } else {
                    $(".w-form-done").show();
                    alert("Feedback added!");
                    window.location.replace("old-home.php");
                }
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
                $(".w-form-fail").show();
            });
    });

    $("#load-feedback").click(function() {
        let issueNum = $("#feedb-load").val();
        $.ajax("old-home.php", {
                type: "POST",
                data: {
                    issueID: issueNum,
                },
            })
            .done(function(response) {
                //console.log(response);
                //alert("Feedback Loaded!");
                $("body").html(response);
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
            });
    });

    $("#submit-update-issue").click(function(event) {
        event.preventDefault();
        let issueNum = $("#ID-number-update").val();
        let stat = $("#current-status").val();
        console.log(issueNum);
        console.log(stat);
        $.ajax("update-issue.php", {
                type: "POST",
                data: {
                    issueID: issueNum,
                    status: stat,
                },
            })
            .done(function() {
                $(".w-form-done").show();
                alert("Feedback added!");
            })
            .fail(function() {
                alert("Something went wrong with the server");
                $(".w-form-fail").show();
            });
    });

    $("#book-personnel").click(function(event) {
        event.preventDefault();
        let issueNum = $("#ID-number-update").val();
        let aDate = $("#app-date-update").val();
        let aTime = $("#app-time-update").val();
        console.log(issueNum);
        console.log(aDate);
        console.log(aTime);
        $.ajax("book-personnel.php", {
                type: "POST",
                data: {
                    issueID: issueNum,
                    appDate: aDate,
                    appTime: aTime,
                },
            })
            .done(function() {
                $(".w-form-done").show();
                alert("Appointment date and time set!");
            })
            .fail(function() {
                alert("Something went wrong with the server");
                $(".w-form-fail").show();
            });
    });

    $("#confirmApp").click(function(event) {
        event.preventDefault();
        let issueNum = $("#ID-number-update").val();
        let confirm = "YES";
        console.log(issueNum);
        console.log(confirm);
        $.ajax("track-issue.php", {
                type: "POST",
                data: {
                    issueID: issueNum,
                    Confirmed: confirm,
                },
            })
            .done(function() {
                $(".w-form-done").show();
                alert("Appointment Confirmed!");
            })
            .fail(function() {
                alert("Something went wrong with the server");
                $(".w-form-fail").show();
            });
    });
});