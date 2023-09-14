// const main = document.getElementById("main");
var meuNutri = document.getElementById('nutri');
var meuCalendario = document.getElementById('calendario');

function calendario() {
    const mainElement = document.getElementById("main");

    const calendarHTML = `
        <div class="container">
            <div class="left">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">março 2015</div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sab</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div>
            <div class="right">
                <div class="today-date">
                    <div class="event-day">Dieta</div>
                    <div class="event-date">12th dezembro 2022</div>
                    <div class="goto-today">
                        <button class="today-btn">Hoje</button>
                    </div>
                </div>
                <div class="events"></div>
            </div>
        </div>
    `;

    mainElement.innerHTML = calendarHTML;
    
      
      
    
      const calendar = document.querySelector(".calendar"),
        date = document.querySelector(".date"),
        daysContainer = document.querySelector(".days"),
        prev = document.querySelector(".prev"),
        next = document.querySelector(".next"),
        todayBtn = document.querySelector(".today-btn"),
        gotoBtn = document.querySelector(".goto-btn"),
        dateInput = document.querySelector(".date-input"),
        eventDay = document.querySelector(".event-day"),
        eventDate = document.querySelector(".event-date"),
        eventsContainer = document.querySelector(".events"),
        addEventBtn = document.querySelector(".add-event"),
        addEventWrapper = document.querySelector(".add-event-wrapper "),
        addEventCloseBtn = document.querySelector(".close "),
        addEventTitle = document.querySelector(".event-name "),
        addEventFrom = document.querySelector(".event-time-from "),
        addEventTo = document.querySelector(".event-time-to "),
        addEventSubmit = document.querySelector(".add-event-btn ");
    
      let today = new Date();
      let activeDay;
      let month = today.getMonth();
      let year = today.getFullYear();
    
      const months = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro",
      ];
    
      const eventsArr = [];
      getEvents();
      console.log(eventsArr);
    
    
      function initCalendar() {
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const prevLastDay = new Date(year, month, 0);
        const prevDays = prevLastDay.getDate();
        const lastDate = lastDay.getDate();
        const day = firstDay.getDay();
        const nextDays = 7 - lastDay.getDay() - 1;
    
        date.innerHTML = months[month] + " " + year;
    
        let days = "";
    
        for (let x = day; x > 0; x--) {
          days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
        }
    
        for (let i = 1; i <= lastDate; i++) {
    
          let event = false;
          eventsArr.forEach((eventObj) => {
            if (
              eventObj.day === i &&
              eventObj.month === month + 1 &&
              eventObj.year === year
            ) {
              event = true;
            }
          });
          if (
            i === new Date().getDate() &&
            year === new Date().getFullYear() &&
            month === new Date().getMonth()
          ) {
            activeDay = i;
            getActiveDay(i);
            updateEvents(i);
            if (event) {
              days += `<div class="day today active event">${i}</div>`;
            } else {
              days += `<div class="day today active">${i}</div>`;
            }
          } else {
            if (event) {
              days += `<div class="day event">${i}</div>`;
            } else {
              days += `<div class="day ">${i}</div>`;
            }
          }
        }
    
        for (let j = 1; j <= nextDays; j++) {
          days += `<div class="day next-date">${j}</div>`;
        }
        daysContainer.innerHTML = days;
        addListner();
      }
    
    
      function prevMonth() {
        month--;
        if (month < 0) {
          month = 11;
          year--;
        }
        initCalendar();
      }
    
      function nextMonth() {
        month++;
        if (month > 11) {
          month = 0;
          year++;
        }
        initCalendar();
      }
    
      prev.addEventListener("click", prevMonth);
      next.addEventListener("click", nextMonth);
    
      initCalendar();
    
    
      function addListner() {
        const days = document.querySelectorAll(".day");
        days.forEach((day) => {
          day.addEventListener("click", (e) => {
            getActiveDay(e.target.innerHTML);
            updateEvents(Number(e.target.innerHTML));
            activeDay = Number(e.target.innerHTML);
    
            days.forEach((day) => {
              day.classList.remove("active");
            });
    
            if (e.target.classList.contains("prev-date")) {
              prevMonth();
    
              setTimeout(() => {
    
                const days = document.querySelectorAll(".day");
                days.forEach((day) => {
                  if (
                    !day.classList.contains("prev-date") &&
                    day.innerHTML === e.target.innerHTML
                  ) {
                    day.classList.add("active");
                  }
                });
              }, 100);
            } else if (e.target.classList.contains("next-date")) {
              nextMonth();
    
              setTimeout(() => {
                const days = document.querySelectorAll(".day");
                days.forEach((day) => {
                  if (
                    !day.classList.contains("next-date") &&
                    day.innerHTML === e.target.innerHTML
                  ) {
                    day.classList.add("active");
                  }
                });
              }, 100);
            } else {
              e.target.classList.add("active");
            }
          });
        });
      }
    
      todayBtn.addEventListener("click", () => {
        today = new Date();
        month = today.getMonth();
        year = today.getFullYear();
        initCalendar();
      });
    
      dateInput.addEventListener("input", (e) => {
        dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
        if (dateInput.value.length === 2) {
          dateInput.value += "/";
        }
        if (dateInput.value.length > 7) {
          dateInput.value = dateInput.value.slice(0, 7);
        }
        if (e.inputType === "deleteContentBackward") {
          if (dateInput.value.length === 3) {
            dateInput.value = dateInput.value.slice(0, 2);
          }
        }
      });
    
      gotoBtn.addEventListener("click", gotoDate);
    
      function gotoDate() {
        console.log("here");
        const dateArr = dateInput.value.split("/");
        if (dateArr.length === 2) {
          if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
            month = dateArr[0] - 1;
            year = dateArr[1];
            initCalendar();
            return;
          }
        }
        alert("Invalid Date");
      }
    
    
      function getActiveDay(date) {
        eventDate.innerHTML = date + " " + months[month] + " " + year;
      }
    
    
      function updateEvents(date) {
        let events = "";
        eventsArr.forEach((event) => {
          if (
            date === event.day &&
            month + 1 === event.month &&
            year === event.year
          ) {
            event.events.forEach((event) => {
              events += ``;
            });
          }
        });
        if (events === "") {
          events = `<div class="no-dieta">
            <h3>Sem Dieta</h3>
        </div>`;
        }
        eventsContainer.innerHTML = events;
        saveEvents();
      }
    
    
      addEventBtn.addEventListener("click", () => {
        addEventWrapper.classList.toggle("active");
      });
    
      addEventCloseBtn.addEventListener("click", () => {
        addEventWrapper.classList.remove("active");
      });
    
      document.addEventListener("click", (e) => {
        if (e.target !== addEventBtn && !addEventWrapper.contains(e.target)) {
          addEventWrapper.classList.remove("active");
        }
      });
    
    
      addEventTitle.addEventListener("input", (e) => {
        addEventTitle.value = addEventTitle.value.slice(0, 60);
      });
    
      function defineProperty() {
        var osccred = document.createElement("div");
        document.body.appendChild(osccred);
      }
    
      defineProperty();
    
    
      addEventFrom.addEventListener("input", (e) => {
        addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
        if (addEventFrom.value.length === 2) {
          addEventFrom.value += ":";
        }
        if (addEventFrom.value.length > 5) {
          addEventFrom.value = addEventFrom.value.slice(0, 5);
        }
      });
    
      addEventTo.addEventListener("input", (e) => {
        addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
        if (addEventTo.value.length === 2) {
          addEventTo.value += ":";
        }
        if (addEventTo.value.length > 5) {
          addEventTo.value = addEventTo.value.slice(0, 5);
        }
      });
    
    
      addEventSubmit.addEventListener("click", () => {
        const eventTitle = addEventTitle.value;
        const eventTimeFrom = addEventFrom.value;
        const eventTimeTo = addEventTo.value;
        if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "") {
          alert("Please fill all the fields");
          return;
        }
    
    
        const timeFromArr = eventTimeFrom.split(":");
        const timeToArr = eventTimeTo.split(":");
        if (
          timeFromArr.length !== 2 ||
          timeToArr.length !== 2 ||
          timeFromArr[0] > 23 ||
          timeFromArr[1] > 59 ||
          timeToArr[0] > 23 ||
          timeToArr[1] > 59
        ) {
          alert("Invalid Time Format");
          return;
        }
    
        const timeFrom = convertTime(eventTimeFrom);
        const timeTo = convertTime(eventTimeTo);
    
    
        let eventExist = false;
        eventsArr.forEach((event) => {
          if (
            event.day === activeDay &&
            event.month === month + 1 &&
            event.year === year
          ) {
            event.events.forEach((event) => {
              if (event.title === eventTitle) {
                eventExist = true;
              }
            });
          }
        });
        if (eventExist) {
          alert("Event already added");
          return;
        }
        const newEvent = {
          title: eventTitle,
          time: timeFrom + " - " + timeTo,
        };
        console.log(newEvent);
        console.log(activeDay);
        let eventAdded = false;
        if (eventsArr.length > 0) {
          eventsArr.forEach((item) => {
            if (
              item.day === activeDay &&
              item.month === month + 1 &&
              item.year === year
            ) {
              item.events.push(newEvent);
              eventAdded = true;
            }
          });
        }
    
        if (!eventAdded) {
          eventsArr.push({
            day: activeDay,
            month: month + 1,
            year: year,
            events: [newEvent],
          });
        }
    
        console.log(eventsArr);
        addEventWrapper.classList.remove("active");
        addEventTitle.value = "";
        addEventFrom.value = "";
        addEventTo.value = "";
        updateEvents(activeDay);
    
        const activeDayEl = document.querySelector(".day.active");
        if (!activeDayEl.classList.contains("event")) {
          activeDayEl.classList.add("event");
        }
      });
    
    
      eventsContainer.addEventListener("click", (e) => {
        if (e.target.classList.contains("event")) {
          if (confirm("Are you sure you want to delete this event?")) {
            const eventTitle = e.target.children[0].children[1].innerHTML;
            eventsArr.forEach((event) => {
              if (
                event.day === activeDay &&
                event.month === month + 1 &&
                event.year === year
              ) {
                event.events.forEach((item, index) => {
                  if (item.title === eventTitle) {
                    event.events.splice(index, 1);
                  }
                });
    
                if (event.events.length === 0) {
                  eventsArr.splice(eventsArr.indexOf(event), 1);
    
                  const activeDayEl = document.querySelector(".day.active");
                  if (activeDayEl.classList.contains("event")) {
                    activeDayEl.classList.remove("event");
                  }
                }
              }
            });
            updateEvents(activeDay);
          }
        }
      });
    
    
      function saveEvents() {
        localStorage.setItem("events", JSON.stringify(eventsArr));
      }
    
    
      function getEvents() {
    
        if (localStorage.getItem("events") === null) {
          return;
        }
        eventsArr.push(...JSON.parse(localStorage.getItem("events")));
      }
    
      function convertTime(time) {
    
        let timeArr = time.split(":");
        let timeHour = timeArr[0];
        let timeMin = timeArr[1];
        let timeFormat = timeHour >= 12 ? "PM" : "AM";
        timeHour = timeHour % 12 || 12;
        time = timeHour + ":" + timeMin + " " + timeFormat;
        return time;
        }
    }
function inicio() {
  main.innerHTML = ` <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>

            <div class="popup" id="meuPopup">
                <h2 id="h2Sobre">Error</h2>
                <p id="pSobre">Informação não encontrada, tente novamente.</p>
                <button id="fecharPopup" onclick="fecharPopup()">Fechar</button>
            </div>

            <div class="elementos">
                <div class="elemento" onclick="abrirDieta()">
                    <p>Minha dieta</p>
                </div>

                <div class="elemento" onclick="abrirIA()">
                    <p>Nutricionista IA</p>
                </div>

                <div class="elemento" onclick="abrirCalendario()">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>

        <div class="container_plano">
            <div class="plano">
                <h1><span>Atinja seus</span> objetivos com nosso site:</h1>
                <div class="balao">
                    <h1>01-</h1>
                    <p>Perfil de dieta para você</p>
                </div>
                <div class="balao">
                    <h1>02-</h1>
                    <p>Preparação de uma refeição rápida</p>
                </div>
                <div class="balao">
                    <h1>03-</h1>
                    <p>Desenhado para si</p>
                </div>
                <div class="balao">
                    <h1>04-</h1>
                    <p>Desenhado para si</p>
                </div>
            </div>
            <div class="img">
                <img src="https://cdn-icons-png.flaticon.com/512/5223/5223176.png" alt="">
            </div>
        </div>
        <hr id="hr">
        <div class="container_programa">
            <div class="programa_titulo">
                <h1>Metodologia NutriMax</h1>
            </div>
            <div class="programa_subtitulo">
                <p>Deixe no passado as tentativas frustradas de ser mais saudável,
                    as dietas mirabolantes e os treinos sem resultados.
                    Confira como funcionam os programas do NutriMax.
                </p>
            </div>
            <div class="programa">
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/815/815128.png" alt="">
                    <h1>Sem desafios dolorosos</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/977/977451.png" alt="">
                    <h1>Chegue no seu objetivo</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/256/606/606534.png" alt="">
                    <h1>melhore seu jeito de viver</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
            </div>
            <button id="programa_btn">Conheça nossos programas</button>
        </div>

        <div class="container_feedback">
            <h2>Observe alguns Feedbacks feitos para nosso site!</h2>
            <div class="feedback">
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
            </div>
        </div>`
  }

  function dieta(){
    main.innerHTML = ` <div class="container-dieta">
    <div class="dia">
    <h1>Dieta</h1>
    <p>Acompanhe:</p>
    </div>
    <div class="dieta">


        <div class="receita">
        <h1>-CAFÉ DA MANHÃ-</h1>
        <ul>
            <li>Alimento 1 - medida</li>
            <li>Alimento 2 - medida</li>
            <li>Alimento 3 - medida</li>
            <li>Alimento 4 - medida</li>
            <li>Alimento 5 - medida</li>
        </ul>
        <h1>-ALMOÇO-</h1>
        <ul>
            <li>Alimento 1 - medida</li>
            <li>Alimento 2 - medida</li>
            <li>Alimento 3 - medida</li>
            <li>Alimento 4 - medida</li>
            <li>Alimento 5 - medida</li>
        </ul>
        <h1>-CAFÉ DA TARDE-</h1>
        <ul>
            <li>Alimento 1 - medida</li>
            <li>Alimento 2 - medida</li>
            <li>Alimento 3 - medida</li>
            <li>Alimento 4 - medida</li>
            <li>Alimento 5 - medida</li>
        </ul>
        <h1>-JANTAR-</h1>
        <ul>
            <li>Alimento 1 - medida</li>
            <li>Alimento 2 - medida</li>
            <li>Alimento 3 - medida</li>
            <li>Alimento 4 - medida</li>
            <li>Alimento 5 - medida</li>
        </ul>
        <h1>-CEIA-</h1>
        <ul>
            <li>Alimento 1 - medida</li>
            <li>Alimento 2 - medida</li>
            <li>Alimento 3 - medida</li>
            <li>Alimento 4 - medida</li>
            <li>Alimento 5 - medida</li>
        </ul>
    </div>
    </div>
</div>`
  }
// function nutricionista() {
//   main.innerHTML = ` <div class="tudo">
//   <div class="box">
//   <div class="header">
//   <div class="img-perfil">
//   <div class="userimg">
//   <img src="./img/nutri.jpg" alt="" class="cover">
//   </div>
//   <h4>Nutricionista <br><span>IA</span></h4>
//   </div>
//   <ul class="horario">
//   <li class="horas">
//   </li>
//   </ul> 
//   </div>
//   <div class="chat" id="chat">
//   <div class="messages" id="mensagens">
//   <!-- As mensagens serão adicionadas aqui dinamicamente -->
//   </div>
//   </div>
//   <div class="chatbox-input">
//   <input type="text" id="input-msg" onkeydown="enviarEnter(event)" placeholder="Mensagem">
//   <i class="fa-solid fa-share" onclick="enviarTexto()"></i>
//   </div>
//   </div>
//   </div>`
// }

function dieta_lincagem() {
  window.location.href="dieta.php";
}