// used divs
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

let question = document.querySelector(".quest");
let subQuest;
let arr = {};
let array = [];

function createQuestion() {
  subQuest = document.createElement('div');
  headOfQuestion();
  arr = {};
  mark();
  difficulty();
  addQuestion();
  question.appendChild(subQuest)
}

function headOfQuestion() {
  let questHeading = document.createElement("div");
  questHeading.className = "quest-heading  ";

  let answer = document.createElement("div");
  answer.className = "answers";
  let dropdown = document.createElement("div");
  dropdown.className = "dropdown";
  let head = document.createElement("input");
  head.type = "text";
  head.value = "";
  head.setAttribute("required", "required");
  head.placeholder = "Write Question";
  head.className = "quest-input magictime swashIn ";
  head.onchange = function () {
    head.value = this.value;
    //     head.setAttribute("disabled", "");
    //     head.className += "bg";
    arr["question"] = this.value;
  };
  let menu = document.createElement("i");

  let ul = document.createElement("ul");
  let tf = document.createElement("li");
  let choose = document.createElement("li");
  let multi = document.createElement("li");
  //icon
  menu.className = "fa fa-ellipsis-v";
  // menu.setAttribute('data-bs-toggle','tooltip');
  menu.setAttribute("data-bs-placement", "top");
  menu.setAttribute("title", "Answers Options");
  menu.id = "dropdownMenuLink";
  menu.setAttribute("data-bs-toggle", "dropdown");
  menu.setAttribute("role", "button");
  //ul
  ul.className = "dropdown-menu";
  ul.setAttribute("aria-labelledby", "dropdownMenuLink");
  tf.id = "trueFalse";
  choose.id = "choose";
  multi.id = "multi";
  tf.textContent = "True & False";
  tf.onclick = function () {
    let a = tfAnswers();
    answer.replaceChildren();
    answer.appendChild(a);
    let x = correcttf();
    answer.appendChild(x);
  };
  choose.textContent = "Choose";
  choose.onclick = function () {
    let a = chooseAnswers();
    answer.replaceChildren();
    answer.appendChild(a);
    let x = correctchoices();
    answer.appendChild(x);
  };
  ul.appendChild(tf);
  ul.appendChild(choose);
  // ul.appendChild(multi)

  let main = chooseAnswers();
  answer.replaceChildren();
  answer.appendChild(main);
  questHeading.appendChild(head);
  questHeading.appendChild(menu);
  questHeading.appendChild(ul);
  subQuest.appendChild(questHeading);
  subQuest.appendChild(answer);
  subQuest.appendChild(dropdown);
  let x = correctchoices();
  answer.appendChild(x);
}

function tfAnswers() {
  let ol = document.createElement("ol");
  let t = document.createElement("li");
  let f = document.createElement("li");
  let textInput1 = document.createElement("input");
  let textInput2 = document.createElement("input");
  ol.type = "a";
  textInput1.type = "text";
  textInput1.value = "True";
  textInput1.placeholder = "True";
  arr["a"] = textInput1.value;
  textInput2.type = "text";
  textInput2.value = "False";
  textInput2.placeholder = "False";
  textInput1.setAttribute("disabled", "true");
  textInput2.setAttribute("disabled", "true");
  textInput1.className += "bg2";
  textInput2.className += "bg2";
  arr["b"] = textInput2.value;
  t.appendChild(textInput1);
  f.appendChild(textInput2);
  ol.appendChild(t);
  ol.appendChild(f);

  return ol;
}
function chooseAnswers() {
  let ol = document.createElement("ol");
  let ans1 = document.createElement("li");
  let ans2 = document.createElement("li");
  let ans3 = document.createElement("li");
  let ans4 = document.createElement("li");
  let textInput1 = document.createElement("input");
  let textInput2 = document.createElement("input");
  let textInput3 = document.createElement("input");
  let textInput4 = document.createElement("input");
  ol.type = "a";
  textInput1.type = "text";
  textInput1.value = "";
  textInput1.placeholder = "Answer1";
  textInput1.setAttribute("required", "");
  textInput1.onchange = function () {
    textInput1.value = this.value;
    //     textInput1.setAttribute("disabled", "");
    //     textInput1.className += "bg2";
    arr["a"] = textInput1.value;
  };
  textInput2.type = "text";
  textInput2.value = "";
  textInput2.placeholder = "Answer2";
  textInput2.setAttribute("required", "");
  textInput2.onchange = function () {
    textInput2.value = this.value;
    //     textInput2.setAttribute("disabled", "");
    //     textInput2.className += "bg2";
    arr["b"] = textInput2.value;
  };
  textInput3.type = "text";
  textInput3.value = "";
  textInput3.placeholder = "Answer3";
  textInput3.setAttribute("required", "required");
  textInput3.onchange = function () {
    textInput3.value = this.value;
    //     textInput3.setAttribute("disabled", "");
    //     textInput3.className += "bg2";
    arr["c"] = textInput3.value;
  };
  textInput4.type = "text";
  textInput4.value = "";
  textInput4.placeholder = "Answer4";
  textInput4.setAttribute("required", "required");
  textInput4.onchange = function () {
    textInput4.value = this.value;
    //     textInput4.setAttribute("disabled", "");
    //     textInput4.className += "bg2";
    arr["d"] = textInput4.value;
  };
  ans1.appendChild(textInput1);
  ans2.appendChild(textInput2);
  ans3.appendChild(textInput3);
  ans4.appendChild(textInput4);
  ol.appendChild(ans1);
  ol.appendChild(ans2);
  ol.appendChild(ans3);
  ol.appendChild(ans4);

  return ol;
}

function correctchoices() {
  let difficult = document.createElement("div");
  difficult.className = "difficulty selecty";
  let p = document.createElement("p");
  let select = document.createElement("select");
  let first = document.createElement("option");
  let a = document.createElement("option");
  let b = document.createElement("option");
  let c = document.createElement("option");
  let d = document.createElement("option");
  p.textContent = "Correct Answer:  ";
  first.innerHTML = "Select answer";
  first.setAttribute("disabled", "");
  first.selected = true;
  p.className = "question-difficutly";
  a.innerHTML = "a";
  a.value = "a";

  b.innerHTML = "b";
  b.value = "b";
  c.innerHTML = "c";
  c.value = "c";
  d.innerHTML = "d";
  d.value = "d";

  select.appendChild(first);
  select.appendChild(a);
  select.appendChild(b);
  select.appendChild(c);
  select.appendChild(d);
  p.appendChild(select);
  select.onchange = function () {
    arr["correct"] = this.value;
    arr['questionType'] = '';
    arr["questionType"] = "choose";
    //     select.setAttribute("disabled", "");
    //     select.className += "bg";
  };

  difficult.appendChild(p);

  return difficult;
}

function correcttf() {
  let difficult = document.createElement("div");
  difficult.className = "difficulty selecty";
  let p = document.createElement("p");
  let select = document.createElement("select");
  let first = document.createElement("option");
  let a = document.createElement("option");
  let b = document.createElement("option");

  p.textContent = "Correct Answer:  ";
  first.innerHTML = "Select answer";
  first.setAttribute("disabled", "");
  first.selected = true;
  p.className = "question-difficutly";
  a.innerHTML = "a";
  a.value = "a";

  b.innerHTML = "b";
  b.value = "b";

  select.appendChild(first);
  select.appendChild(a);
  select.appendChild(b);
  p.appendChild(select);
  select.onchange = function () {
    arr["correct"] = this.value;
    delete arr['c'];
    delete arr['d'];
    arr["questionType"] = "true&false";
    //     select.setAttribute("disabled", "");
    //     select.className += "bg";
  };

  difficult.appendChild(p);
  return difficult;
}

function mark() {
  let difficult = document.createElement('div');
  difficult.className = 'difficulty';
  let p = document.createElement('p');
  let mark = document.createElement('input');
  mark.type = 'number';
  mark.className = "degree";
  mark.placeholder = "Write Mark";
  p.className = 'question-difficutly';
  p.textContent = 'Mark Of Question: ';
  p.appendChild(mark)
  mark.value = '';
  mark.onchange = function () {
    mark.value = this.value;
    arr['mark'] = this.value
  }


  difficult.appendChild(p);
  subQuest.appendChild(difficult);
}

function difficulty() {
  let difficult = document.createElement("div");
  difficult.className = "difficulty";
  let p = document.createElement("p");
  let select = document.createElement("select");
  let first = document.createElement("option");
  let easy = document.createElement("option");
  let medium = document.createElement("option");
  let hard = document.createElement("option");
  p.textContent = "Difficulty: ";
  first.innerHTML = "Select difficulty";
  first.setAttribute("disabled", "");
  first.selected = true;
  p.className = "question-difficutly";
  easy.innerHTML = "Easy";
  easy.value = "easy";

  medium.innerHTML = "Medium";
  medium.value = "medium";
  hard.innerHTML = "Hard";
  hard.value = "hard";
  select.appendChild(first);
  select.appendChild(easy);
  select.appendChild(medium);
  select.appendChild(hard);
  p.appendChild(select);
  select.onchange = function () {
    arr["difficulty"] = this.value;
    //     select.setAttribute("disabled", "");
    //     select.className += "bg";
  };

  difficult.appendChild(p);
  subQuest.appendChild(difficult);
}
// ajax request is here
function addQuestion() {
  let add = document.createElement("div");
  add.className = "line";
  let line = document.createElement("i");
  line.className = "fa fa-plus-circle fa-2x";
  let btn = document.createElement("div");
  let button = document.createElement("button");
  button.type = "submit";
  btn.id = "btn-div";
  button.textContent = "Save Changes";
  button.id = "save";
  btn.appendChild(button);
  line.setAttribute('data-bs-toggle', 'tooltip');
  line.setAttribute('data-bs-placement', 'top');
  line.setAttribute('title', 'Add Question')
  line.onclick = function () {
    //  console.log(Object.keys(arr))
    if (arr["questionType"] === "choose" && Object.keys(arr).length == 9) {
      //console.log(arr)
      // $('.line').click(function () {
          console.log(arr)

      // });

      var action = "action";
      const params = new URLSearchParams(window.location.search);
      const id = params.get("ch_id");

      $.ajax({
        url: "../includes/add_question.inc.php?ch_id=" + id,
        method: "POST",
        data: { action: action, array: arr },
        success: function (data) {
          console.log("okay");
          console.log(data);
        },
        error: function (error) {
          console.log("error");
        },
      });
      line.remove();
      btn.remove();
      subQuest.style.pointerEvents = 'none';
      subQuest.style.backgroundColor = 'rgba(0, 0, 0, 0.04)';
      subQuest.style.padding = '7px 0 0 0'
      createQuestion();
    } else if (
      arr["questionType"] === "true&false" &&
      Object.keys(arr).length == 7
    ) {
      var action = "action";
      const params = new URLSearchParams(window.location.search);
      const id = params.get("ch_id");

      $.ajax({
        url: "../includes/add_question.inc.php?ch_id=" + id,
        method: "POST",
        data: { action: action, array: arr },
        success: function (data) {
          console.log("okay");

          console.log(data);
        },
        error: function (error) {
          console.log("error");
        },
      });
      line.remove();
      btn.remove();
      subQuest.style.pointerEvents = 'none';
      subQuest.style.backgroundColor = 'rgba(0, 0, 0, 0.04)';
      subQuest.style.padding = '7px 0 0 0'
      createQuestion();
    } else {
      swal(
        "Some Fields Empty!",
        "Please Fill all Fields, \n Choose the correct answer, \n Select difficulty of question. ",
        "error"
      );
    }
  };
  button.onclick = function () {
    if (arr["questionType"] === "choose" && Object.keys(arr).length == 9) {
      var action = "action";
      const params = new URLSearchParams(window.location.search);
      const id = params.get("ch_id");

      $.ajax({
        url: "../includes/add_question.inc.php?ch_id=" + id,
        method: "POST",
        data: { action: action, array: arr },
        success: function (data) {
          console.log(data)
          swal({
            title: 'Data Added Successfully',
            text: 'Redirecting...',
            icon: 'success',
            timer: 5000,
            buttons: false,
          })
            .then(() => {
              window.location.href = "../Home/question-bank.php?chapter_id=" + id;
              // dispatch(redirect('/'));
            })

        },
        error: function (error) {
          console.log("error");
        },
      });
    } else if (
      arr["questionType"] === "true&false" &&
      Object.keys(arr).length == 7
    ) {
      var action = "action";
      const params = new URLSearchParams(window.location.search);
      const id = params.get("ch_id");

      $.ajax({
        url: "../includes/add_question.inc.php?ch_id=" + id,
        method: "POST",
        data: { action: action, array: arr },
        success: function (data) {
          console.log(data)
          swal({
            title: 'Data Added Successfully',
            text: 'Redirecting...',
            icon: 'success',
            timer: 5000,
            buttons: false,
          })
            .then(() => {
              window.location.href = "../Home/question-bank.php?chapter_id=" + id;
              // dispatch(redirect('/'));
            })
        },
        error: function (error) {
          console.log("error");
        },
      });
    } else {
      swal(
        "Some Fields Empty!",
        "Please Fill all Fields, \n Choose the correct answer, \n Select difficulty of question. ",
        "error"
      );
    }

    // window.location.href = '/Question-Bank/question-bank.html';
  };
  add.appendChild(line);
  subQuest.appendChild(add);
  subQuest.appendChild(btn);
}

(function load() {
  createQuestion();
})();
