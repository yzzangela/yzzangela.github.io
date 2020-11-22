var video;

window.addEventListener("load", function() {
	video = document.querySelector("#myVideo");
	document.getElementById("volume").innerHTML = myVideo.volume * 100 + "%";
	console.log("Starting");
	console.log(video.volume);
});

document.querySelector("#play").addEventListener("click", function() {
	console.log("Play Video");
	video.play();
	let vol = document.querySelector("#volume").innerHTML = video.volume + "%";
});

document.querySelector("#pause").addEventListener("click", function() {
	console.log("Pause Video");
	video.pause();
});

document.querySelector("#slower").addEventListener("click", function() {
	myVideo.playbackRate = 0.9*myVideo.playbackRate;
	console.log("Current speed is", myVideo.playbackRate);
});

document.querySelector("#faster").addEventListener("click", function() {
	myVideo.playbackRate = 1.1*myVideo.playbackRate;
	console.log("Current speed is", myVideo.playbackRate);
});

document.querySelector("#skip").addEventListener("click", function() {
	myVideo.currentTime = myVideo.currentTime + 5;
	console.log("Current location is", myVideo.currentTime);
});

document.querySelector("#mute").addEventListener("click", function() {
	if (myVideo.muted){
		myVideo.muted = false;
		console.log("unmute");
		document.getElementById("mute").innerHTML = "Mute";
	}
	else {
		myVideo.muted = true;
		console.log("mute");
		document.getElementById("mute").innerHTML = "Unmute";
	}
});

document.querySelector("#volumeSlider").addEventListener("change", function() {
	myVideo.volume = document.getElementById("volumeSlider").value / 100;
	document.getElementById("volume").innerHTML = myVideo.volume * 100 + "%";
	console.log("Current volume is", myVideo.volume*100);
});

document.querySelector("#old").addEventListener("click", function() {
	myVideo.classList.add("oldTime");
});

document.querySelector("#original").addEventListener("click", function() {
	myVideo.classList.remove("oldTime");
});


