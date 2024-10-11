    //ここで表示する画像を調整

    // let colors = ["yellow-red", "yellow-green", "blue-green"];
    let colors = [
        "yellow-red", "yellow-green", "blue-green", "purple-blue", "red-purple", "red", "blue", "green", "yellow", "pink", "purple", "white"
    ];

    let colors_num = colors.length;

    //色の組み合わせの配列
    let pairs = [];
    for(let i = 0; i < colors_num; i++){
        for(let j = 0; j < colors_num; j++){
            if(colors[i] != colors[j]){
                let newPair = [colors[i], colors[j]];
                pairs.push(newPair);
            }
        }
    };

    //配列シャッフルする関数
    function arrayShuffle(array) {
        for(let i = (array.length - 1); 0 < i; i--){
      
          // 0〜(i+1)の範囲で値を取得
          let r = Math.floor(Math.random() * (i + 1));
      
          // 要素の並び替えを実行
          let tmp = array[i];
          array[i] = array[r];
          array[r] = tmp;
        }
        return array;
    }
    //pairsをシャッフル
    arrayShuffle(pairs);

    //答えの配列
    let answers = [];

    //初期設定
    let count = 0;
    let countMax = colors_num*colors_num-colors_num;
    $('span').eq(0).addClass(pairs[count][0]);
    $('span').eq(1).addClass(pairs[count][1]);
    $('input').focus();

    //回答を選んだ場合
    $('input').keyup((e)=>{
        let number = e.code[6];
        if(number == 7){
            let leftColor = $('span').eq(0).attr("class");
            let rightColor = $('span').eq(1).attr("class");
            let selectedColor = $('span').eq(0).attr("class");
            let answer = [leftColor, rightColor, selectedColor];
            answers.push(answer);
            count += 1;
        }else if(number == 9){
            let leftColor = $('span').eq(0).attr("class");
            let rightColor = $('span').eq(1).attr("class");
            let selectedColor = $('span').eq(1).attr("class");
            let answer = [leftColor, rightColor, selectedColor];
            answers.push(answer);
            count += 1;
        }

        if(count == countMax){
            let stringAnswers = "";
            answers.forEach((answer) => {
                let stringAnswer = answer.toString() + "|";
                stringAnswers += stringAnswer;
            });
            $('#answers').val(stringAnswers);
            // console.log($('#answers').val());
            $('form').submit();
        }
        if(number == 7 || number == 9){
            $('span').eq(0).removeClass();
            $('span').eq(1).removeClass();
            $('span').eq(0).addClass(pairs[count][0]);
            $('span').eq(1).addClass(pairs[count][1]);
        }
    })

