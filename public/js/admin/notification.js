let readNotification;
let goToPage;

function showNotification() {
    document.querySelector(".pop-up").classList.toggle("show");
    document.querySelector(".notification-container").classList.toggle("hide");
}

$(document).ready(function () {
    //Initially update the unread message count
    getUnReadCount()

    //Update unread message count periodically
    setInterval(getUnReadCount, 3000);

    $(".notification-container").click(function () {
        if ($(".pop-up").hasClass("show")) {
            updateNotificationList();
        }
    });

    readNotification = function (notificationId) {
        const tagId = `#notification-${notificationId}`;

        $.ajax({
            type: "GET",

            url: "http://localhost/partyak/notification/readNotification/" + notificationId,
            dataType: "html",
        })

        $(tagId).empty();

        if ($("#unread-name-toggle").is(":checked")) {
            updateUnreadNotificationList();
        }
    }

    goToPage = function (notificationId) {
        const tagId = `#notification-link-${notificationId}`;
        readNotification(notificationId);
        const link = $(tagId).attr("data-value");

        window.location = link;
    }

    $("#unread-name-toggle").change(function () {
        if ($(this).is(":checked")) {
            updateUnreadNotificationList();
        } else {
            updateNotificationList();
        }

    });

    function getUnReadCount() {
        $.ajax({
            type: "GET",

            url: "http://localhost/partyak/notification/notificationCount/",
            dataType: "html",
            success: function (response) {
                if (response == "0") {
                    $(".active-status").hide();
                } else {
                    $(".active-status").show();
                }
                $(".active-status").html(response);
            }
        })
    }

    function updateNotificationList() {
        $.ajax({
            type: "GET",

            url: "http://localhost/partyak/notification/updateNotification/",
            dataType: "html",
            success: function (response) {
                $(".notification-details").html(response);
            }
        })
    }

    function updateUnreadNotificationList() {
        $.ajax({
            type: "GET",

            url: "http://localhost/partyak/notification/getUnreadNotification/",
            dataType: "html",
            success: function (response) {
                $(".notification-details").html(response);
            }
        })
    }

    //notification

});