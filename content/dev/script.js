

//_______________CANVAS____________________

function initCanvas() {

	var canvas = document.getElementById("canvas");
	var context = canvas.getContext("2d");

	function degToRad(degree) {
		var factor = Math.Pi/180;
		return degree*factor;
	}
	function cloud1(x, y) {
		context.save();
		context.translate(x, y);

		context.beginPath();
		context.moveTo(20, 20);
		context.bezierCurveTo(0, 25, 0, 35, 20, 40);
		context.quadraticCurveTo(60, 45, 100, 40);
		context.bezierCurveTo(120, 35, 120, 25, 100, 20);
		context.bezierCurveTo(90, -10, 50, -10, 40, 10);
		context.quadraticCurveTo(25, 5, 20, 20);
		context.closePath();
		context.lineWidth = 2;
		context.fillStyle = "#f2f2f2";
		context.stroke();
		context.fill();

		context.restore();
	}
	function cloud2(x, y) {
		context.save();
		context.translate(x, y);

		context.beginPath();
		context.moveTo(10, 40);
		context.bezierCurveTo(10, 55, 20, 65, 40, 60);
		context.bezierCurveTo(40, 70, 60, 80, 70, 70);
		context.bezierCurveTo(80, 75, 90, 70, 90, 60);
		context.bezierCurveTo(110, 70, 130, 40, 110, 20);
		context.bezierCurveTo(110, 5, 90, -5, 80, 10);
		context.bezierCurveTo(70, -10, 30, 0, 30, 20);
		context.bezierCurveTo(20, 20, 10, 25, 10, 40);
		context.closePath();
		context.lineWidth = 2;
		context.fillStyle = "#f2f2f2";
		context.stroke();
		context.fill();

		context.restore();
	}
	function Opponent(id, posTop, img) {
		var posLeft = document.getElementById(id).value;
		var opponentImg = new Image();
		opponentImg.src = img;
		this.drawOpponent = function() {
			context.drawImage(opponentImg, posLeft, posTop);
		}
	}

	function drawBackground() {
		// небо
		var sky_gradient = context.createLinearGradient(0, 0, 300, 100);
		sky_gradient.addColorStop(0, "#84b3ff");
		sky_gradient.addColorStop(1, "#5b9aff");
		context.fillStyle = sky_gradient;
		context.fillRect(0, 0, canvas.width, 300);
		// земля
		var ground_gradient = context.createLinearGradient(0, 100, 300, 50);
		ground_gradient.addColorStop(0, "#008421");
		ground_gradient.addColorStop(1, "#00721c");
		context.fillStyle = ground_gradient;
		context.lineWidth = 2;
		context.strokeRect(0, 300, canvas.width, 180);
		context.fillRect(0, 300, canvas.width, 180);
	}
	function drawSun() {
		context.save();
		context.translate(450, 50);

		context.beginPath();
		context.arc(0, 0, 30, 0, 2*Math.PI);
		context.lineWidth = 2;
		context.fillStyle = "yellow";
		context.stroke();
		context.fill();

		context.restore();
	}
	function drawClouds() {
		cloud1(100, 150);
		cloud1(450, 20);
		cloud2(350, 120);
	}
	function drawRoad() {
		context.save();
		context.translate(0, 350);

		// асфальтовое полотно
		var roadLength = document.getElementById("roadLength").value; // длина полотна
		var roadWidth = document.getElementById("roadWidth").value; // ширина полотна
		var roadLeft = 40;
		context.transform(1,0,-0.5,1,0,0); // наклон
		context.fillStyle = "#6d6d6d";
		context.lineWidth = 2;
		context.strokeRect(roadLeft, 0, roadLength, roadWidth);
		context.fillRect(roadLeft, 0, roadLength, roadWidth);

		// разметка
		var lineLength = +document.getElementById("lineLength").value; // длина линии
		var lineWidth = +document.getElementById("lineWidth").value; // ширина линии
		var step = +document.getElementById("step").value + lineLength; // шаг линии
		var lineLeft = +document.getElementById("lineLeft").value + roadLeft; // отступ слева
		var lineCenterPos = (roadWidth - lineWidth) / 2;

		// повторение разметки
		for (var i = 0; i < roadLength; i += step) {
			context.fillStyle = "white";
			context.strokeRect(lineLeft, lineCenterPos, lineLength, lineWidth);
			context.fillRect(lineLeft, lineCenterPos, lineLength, lineWidth);
			lineLeft += step;
		}
		context.restore();
	}
	function drawOpponents() {
		var opponent1 = new Opponent("airplaneLeft", 60, "airplane.png");
		var opponent2 = new Opponent("carLeft", 300, "car.png");

		opponent1.drawOpponent();
		opponent2.drawOpponent();
	}
	function drawContent() {
		context.font = "bold 21px Andika";
		context.textBaseline = "alphabetic";
		context.fillStyle = "#fff";
		var time = "Time: 0,00 s";
		var textWidth = context.measureText(time);
		context.fillText(time, (context.canvas.width - textWidth.width) / 2, 40);
	}

	function Draw() {
		drawBackground();
		drawSun();
		drawClouds();
		drawRoad();
		drawOpponents();
		drawContent();
	}

	Draw();

	// кнопка Подтвердить
	document.getElementById("confirm").onclick = function () {
		context.clearRect(0, 0, context.canvas.width, context.canvas.height);
		Draw();
	}
}

// обработчик события load
window.addEventListener("load", initCanvas, true);

//__________________MODAL__________________

function showModal() {
	setModalParam();
	document.getElementById("modal").style.display = "block";
}

function closeModal() {
	document.getElementById("modal").style.display = "none";
}

function setModalParam() {
	var title = document.getElementById("titleM").value;
	var text = document.getElementById("textM").value;

	if (title == "") title = "Заголовок не задан";
	if (text == "") text = "Текст не задан";

	document.getElementById("modalTitle").innerHTML = title;
	document.getElementById("modalText").innerHTML = text;
}

// Styles
var modal = {
  position: "fixed",
  top: 0,
  left: 0,
  rigth: 0,
  bottom: 0,
  width: "100%",
  height: "100%",
  backgroundColor: "rgba(0, 0, 0, 0.5)",
  modalWindow: {
    position: "relative",
    top: "300px",
    margin: "0 auto",
    padding: "15px",
    width: "400px",
    boxShadow: "0 0 5px #333",
    backgroundColor: "#fff",
    borderRadius: "3px"
  }
};
setModalStyle(modal);
function setModalStyle(modal) {
  document.getElementById("modal").style.position = modal.position;
  document.getElementById("modal").style.top = modal.top;
  document.getElementById("modal").style.left = modal.left;
  document.getElementById("modal").style.rigth = modal.rigth;
  document.getElementById("modal").style.bottom = modal.bottom;
  document.getElementById("modal").style.width = modal.width;
  document.getElementById("modal").style.height = modal.height;
  document.getElementById("modal").style.backgroundColor = modal.backgroundColor;
  document.getElementById("modalWindow").style.position = modal.modalWindow.position;
  document.getElementById("modalWindow").style.top = modal.modalWindow.top;
  document.getElementById("modalWindow").style.margin = modal.modalWindow.margin;
  document.getElementById("modalWindow").style.padding = modal.modalWindow.padding;
  document.getElementById("modalWindow").style.width = modal.modalWindow.width;
  document.getElementById("modalWindow").style.boxShadow = modal.modalWindow.boxShadow;
  document.getElementById("modalWindow").style.backgroundColor = modal.modalWindow.backgroundColor;
  document.getElementById("modalWindow").style.borderRadius = modal.modalWindow.borderRadius;
}

//______________________________________

titleCase('a clash of KINGS', 'a an the of');

function titleCase(title, minorWords) {
	var arr = title.split(" ");
	var words = minorWords.split(" ");
	var word = [];
	for (var i = 0; i < arr.length; i++) {
		arr[i] = arr[i].toLowerCase();

		word = arr[i].split("");
		word[0] = word[0].toUpperCase();

		arr[i] = word.join("");
	}
	alert(arr.join(" "));
}
