var format = function(num){
    var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
    if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ".") {
            output.push(str[j]);
            if(i%3 == 0 && j < (len - 1)) {
                output.push(".");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return("  " + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};
$(function() {
    $( "#slider-rangce" ).slider({
        range:true,
        min: 0,
        max: 759000,
        values: [ 0, 759000 ],
        slide: function( event, ui ) {
            $( "#start" ).val(format(ui.values[ 0 ]))
            $( "#stop" ).val(format(ui.values[ 1 ]))
        }
    });
    $( "#price" ).val( "$" + $( "#slider-rangce" ).slider( "values", 0 ) +
        " - $" + $( "#slider-rangce" ).slider( "values", 1 ) );
});

$(function() {
    var htmlEditor = ace.edit("htmlEditor");
    ace.require("ace/ext/language_tools");
    // htmlEditor.setTheme("ace/theme/monokai");
    htmlEditor.getSession().setMode("ace/mode/html");
    htmlEditor.getSession().setUseSoftTabs(true);
    htmlEditor.getSession().setTabSize(4);
    // htmlEditor.gotoLine(4);
    htmlEditor.getSession().setUseSoftTabs(true);
    // htmlEditor.getSession().setUseSoftTabs(true);
    htmlEditor.setOption({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        autoScrollEditorIntoView: true
    });
    htmlEditor.getSession().setUseWrapMode(true)
    // document.getElementById('htmlEditor').style.fontSize='14px';



    var cssEditor = ace.edit("cssEditor");
    // cssEditor.setTheme("ace/theme/monokai");
    cssEditor.getSession().setMode("ace/mode/css");
    cssEditor.getSession().setUseSoftTabs(true);
    cssEditor.getSession().setTabSize(4);

    var jsEditor = ace.edit("jsEditor");
    // jsEditor.setTheme("ace/theme/monokai");
    jsEditor.getSession().setMode("ace/mode/javascript");
    jsEditor.getSession().setUseSoftTabs(true);
    jsEditor.getSession().setTabSize(4);
})