    //ここで表示する画像を調整
    // let colors = [
    //     "HSL0", "HSL30", "HSL60", "HSL90", "HSL120", 
    //     "HSL150", "HSL180", "HSL210", "HSL240", "HSL270", 
    //     "HSL300", "HSL330", "black", "white" 
    // ];

    // let colors = [
    //     "red", "green", "blue", "yellow", "purple", "pink", "brown", "orange", "white", "black"
    // ];

    let colors = [
        "yellow-red", "yellow-green", "blue-green", "purple-blue", "red-purple", "red", "blue", "green", "yellow", "pink", "purple", "gray"
    ];

    //表示する画像の数
    let item_num = 8;
    if(count >= 60){
        item_num = 6;
    }

    //実際表示された画像の配列
    let targets = [];

    //回答の色を決定
    let answer = colors[Math.floor(Math.random() * colors.length)];
    $('.answer').attr("class", answer);

    //刺激作成
    for(let i = 0; i < item_num; i++){
        let randomId = Math.floor(Math.random() * colors.length);
        let randomColor = colors.splice(randomId, 1);
        targets.push(randomColor[0]);
        let stimulate = $(`
            <span class="color-box ${randomColor[0]}"></span>
            <button class="select ${i}">${i+1}</button>
                `);
        $('.circumference').append(stimulate);
    }
    
    //円周角
    let degree = 360.0 / item_num;
    //ラジアンに置き換え
    let radians = (degree * Math.PI) / 180.0;
    let radians90 = (90 * Math.PI) / 180.0;
    //大きい円の半径
    let radius = $('.circumference').width() / 2;
    $('.option').each((i, elem)=>{
        let x = Math.cos(radians * i - radians90) * radius + radius;
        let y = Math.sin(radians * i - radians90) * radius + radius;
        $(elem).css("left", x);
        $(elem).css("top", y);
    })
    $('.color-box').each((i, elem)=>{
        let x = Math.cos(radians * i - radians90) * radius + radius;
        let y = Math.sin(radians * i - radians90) * radius + radius;
        $(elem).css("left", x);
        $(elem).css("top", y);
    })
    $('.select').each((i, elem)=>{
        let x = Math.cos(radians * i - radians90) * radius + radius;
        let y = Math.sin(radians * i - radians90) * radius + radius;
        $(elem).css("left", x);
        $(elem).css("top", y);
    })

    //答えがあるかどうか、あるとしたら答えはどこにあるか
    let answerId = -1;
    for(let i = 0; i < targets.length; i++){
        if(answer == targets[i]){
            answerId = i;
        }
    }

    let startTime = 0;
    let endTime = 0;
    console.log(count);

    //最初に数秒間正解を提示し、時間差で問題を出す
    function showTargets(){
        $('.target').css("display", "none");
        $('.circumference').css("display", "flex");
        $('.center').css("display", "flex");
        $('.center').css("border", "none");
        $('.noTarget').css("display", "flex");
        $('#find').focus();
    }
    function start(){
        $('.start').css("background-color", "black");
        setTimeout(showTargets, 500);
        startTime = Date.now();
    }
    setTimeout(start, 3000);

    let results = [];

    //作成用コード、実際には使わない
    // $('.start').click(()=>{
    //     startTime = Date.now();
    //     $('.target').css("display", "none");
    //     $('.circumference').css("display", "flex");
    //     $('.center').css("display", "flex");
    //     $('.center').css("border", "none");
    //     // $('.start').css("background-color", "grey");
    //     $('#find').focus();
    // })

    //回答を見つけた場合
    $('#find').keyup((e)=>{
        if(e.code[6] == "E"){
            endTime = Date.now();
            $('#find').css("display", "none");
            $('.select').css("display", "flex");
            $('.noTarget').css("font-size", "24px");
            $('.noTarget').html("なし <br/>0");
            $('#number').focus();
        }
    })
    
    //回答を選んだ場合
    $('#number').keyup((e)=>{
        console.log(e.code);
        let selectedNumber = Number(e.code[6]) - 1;
        let responseTime = endTime - startTime;
        if(selectedNumber == -1){
            postAnswer(-1, "no", responseTime);
        }else if(selectedNumber < item_num){
            let selectedTarget = $('.color-box').eq(selectedNumber).attr("class").split(" ")[1];
            postAnswer(selectedNumber, selectedTarget, responseTime);
        }
    })

    console.log(targets.join(","));
    //回答をpostする
    function postAnswer(targetId, selectedTarget, responseTime){
        $('#answer').val(answer);
        $('#selectedTarget').val(selectedTarget);
        $('#responseTime').val(responseTime);
        $('#item_num').val(item_num);
        $('#answer_id').val(answerId);
        $('#target_id').val(targetId);
        $('#other_colors').val(targets.join("|"));
        $('#count').val(count += 1);
        if(answerId == targetId){
            $('#check').val(1);
        }else{
            $('#check').val(0);
        }
        $('form').submit();
    }



