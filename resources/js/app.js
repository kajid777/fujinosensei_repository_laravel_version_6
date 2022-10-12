/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



const typeDisplay = document.getElementById("typeDisplay");
const typeInput = document.getElementById("typeInput");
const timer = document.getElementById("timer");

const typeSound = new Audio("./audio_typing-sound.mp3")
/*inputテキスト入力。あっているかどうかの判定*/
typeInput.addEventListener("input", () => {
    /*タイプ音をつける */
    typeSound.play();
    typeSound.currentTime = 0;
    const sentenceArray =typeDisplay.querySelectorAll("span");
    
    const arrayValue = typeInput.value.split("");
    
    sentenceArray.forEach((characterSpan, index) => {

        if (arrayValue[index] == null) {
            characterSpan.classList.remove("incorrect");
            characterSpan.classList.remove("correct");
        }
        else if(characterSpan.innerText == arrayValue[index]) {
            characterSpan.classList.add("correct");
            characterSpan.classList.remove("incorrect");
        } else {
            characterSpan.classList.add("incorrect");
            characterSpan.classList.remove("correct");
        }

    })
});

function get_data() {
    return new Promise((resolve, reject) => {
        axios.get('/problems')
            .then(function (response) {
                // 成功時に実行
                // response.dataに実際のデータが入っている
                let result = response.data;
                resolve(result);
            })
            .catch(function (error) {
                // エラー時に実行
                reject(error);
            })
            .then(function () {
                // 常に実行
            });
    });
}
/*非同期で文章を取得する*/
async function GetSentence() {
    // var request = new XMLHttpRequest();
    // return request.open('GET','/problems')
    
    // function get_data() {
    //     let result;
    //     axios.get('/problems')
    //     .then(function(response) {
    //         result=response.data;
            
    //     });
    //     console.log(result);
    //     return result;
    // };
    let answer = await get_data();
    
    
    // return problemgetter();
    return answer;
}



/*ランダムに取得した文章を表示する*/
async function RenderSentence(num) {
    
    const e = await GetSentence();
    /*クリックしたページからcontentのインデックス番号を取得したい*/
    const sentence = e[num].content;
    typeDisplay.innerText = "";

    /*文章を一文字ずつ分解してspanタグで表示する*/

    let oneText = sentence.split("");
    
    oneText.forEach(character => {
        const characterSpan = document.createElement("span");
        characterSpan.innerText = character;
        
        typeDisplay.appendChild(characterSpan);
        characterSpan.classList.add("correct");
    });
    /*テキストボックスの中身を消す*/
    typeInput.value = "";
    /*時間のリセット*/
    StartTimer();
}

//タイマーの仕組み理解できなかった。。。
// let startTime;
// let originTime = 30;
// function StartTimer() {
//     timer.innerText = originTime;
//     startTime = new Date();
    
//     setInterval(()=>{
//         timer.innerText = originTime - getTimerTime();
//         if (timer.innerText <= 0) TimeUp();
//     }, 1000);
// }

// function getTimerTime() {
//     return Math.floor((new Date() - startTime) / 1000);
// }

// function TimeUp() {
//     RenderSentence();
// }
//if文を使ってRenderSentenceを呼び出す?


//指定の文章を出力する関数
async function linked_render() {
    //リンクからインデックスのための数字取得をして、
    let URI = await location.href;
    //var endnumber = URI.slice(-1);
    var words = [];
    
    words = URI.split("/");
    let endNumber = Number(words[4]);
    //取得したデータのインデックスの番号の関係で１をマイナス
    let chapterNumber = endNumber - 1;
    RenderSentence(chapterNumber);
}
linked_render()