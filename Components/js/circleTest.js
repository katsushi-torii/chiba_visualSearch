    //ここで表示する画像を調整

    let colors = [
        "gray", "yellow", "yellow-green", "green", "blue-green", "blue", "purple-blue", "purple",  "pink","red-purple", "red", "yellow-red"
    ];

    //表示する画像の数
    let item_num = 12;


    //刺激作成
    for(let i = 0; i < item_num; i++){
        let randomColor = colors.splice(0, 1);
        let stimulate = $(`
            <span class="color-box ${randomColor[0]}">${i}</span>
            <button class="select ${i}">${i+1}</button>
        `);
        let mosaicTable = $(`<table class="mosaic"></table>`);
        for(let j = 0; j < 8; j++){
            let tr = $(`<tr></tr>`);
            for(let k = 0; k < 8; k++){
                let td = $(`<td></td>`);
                tr.append(td);
            }
            mosaicTable.append(tr);
        }
        $('.circumference').append(stimulate);
        $('.circumference').append(mosaicTable);
    }
    
    //円周角
    let degree = 360.0 / item_num;
    //ラジアンに置き換え
    let radians = (degree * Math.PI) / 180.0;
    let radians90 = (90 * Math.PI) / 180.0;
    //大きい円の半径
    let radius = $('.circumference').width() / 2;
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


    //最初に数秒間正解を提示し、時間差で問題を出す
    function showTargets(){
        $('.target').css("display", "none");
        $('.circumference').css("display", "flex");
        $('.center').css("display", "flex");
        $('.center').css("border", "none");
        $('.noTarget').css("display", "flex");
        $('#find').focus();
    }
    showTargets();


    



