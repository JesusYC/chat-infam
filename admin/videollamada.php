<script>
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.addEventListener("load", function (event) {

    const meeting = new VideoSDKMeeting();
    
    const config = {
      name: "Jesús Gabriel Yataco",
      apiKey: "3d4b44f6-960b-421f-b08a-406c168c2771", 
      meetingId: "SOCIAL_DEMO", 
      redirectOnLeave: "https://www.videosdk.live/",
      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,
      joinScreen: {
        visible: true, // Show the join screen ?
        title: "Conferencia Virtual", // Meeting title
        meetingUrl: window.location.href, // Meeting joining url
      },
      screenShareEnabled: true,
    };
    
    meeting.init(config);
  });

  script.src = "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.1/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);

  const config = {
  // other config
  screenShareEnabled: true,
};

</script>