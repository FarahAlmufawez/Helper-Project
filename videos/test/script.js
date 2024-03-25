// let likebtn = document.querySelector('#likebtn');
// let dislikebtn = document.querySelector('#dislikebtn');

let input1 = document.querySelector("#input1");
let input2 = document.querySelector("#input2");

$("#likebtn").on("click", function () {
  var parent_element = $(this).parent().parent();
  var video_text = parent_element.find(".video-active-title").html();

  if (video_text != "") {
    let video_information = video_text.split(".");

    let video_id = video_information[0];
    let video_title = video_information[1];

    $.ajax({
      url: "ajax.php",
      type: "post",
      data: { video_id: video_id, video_title: video_title,video_action:"Like"},
      success: function (response) {
        // console.log(response);

        if(response == 1){
          input1.value = parseInt(input1.value) + 1;
          input1.style.color = "#00802b";
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
  }
});


$("#dislikebtn").on("click", function () {
  var parent_element = $(this).parent().parent();
  var video_text = parent_element.find(".video-active-title").html();

  if (video_text != "") {
    let video_information = video_text.split(".");

    let video_id = video_information[0];
    let video_title = video_information[1];

    $.ajax({
      url: "ajax.php",
      type: "post",
      data: { video_id: video_id, video_title: video_title,video_action:"Dislike"},
      success: function (response) {
        if(response == 1){
            input2.value = parseInt(input2.value) + 1;
            input2.style.color = "#ff4d4d";
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
  }
});


