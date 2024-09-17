let size = 1.0;
function up(){
    size += 0.01;
    $('.stimulate').css("transform", `scale(${size})`)
}
function down(){
    size -= 0.01;
    $('.stimulate').css("transform", `scale(${size})`)
}