function startTerm(){
$(function() {
    var data = [
        {
            action: 'type',
            strings: ["cd /home/damien^400"],
            output: '   ',
            postDelay: 1000
        },
        {
            action: 'type',
            strings: ["git clone https://github.com/DamienPayet/pfo.git^400"],
            output: '<span class="gray">Cloning into \'pfo\'...\n</span><br>&nbsp;',
            postDelay: 1000
        },
        {
            action: 'type',
            strings: ["cd pfo^400"],
            output: ' ',
            postDelay: 1000
        },
        {
            action: 'type',
            strings: ["./fpo.exe^400"],
            output: $('.mimik-run-output').html(),
            postDelay: 1000
        }
    ];
    runScripts(data, 0);
});
}
function runScripts(data, pos) {
    var prompt = $('.prompt'),
        script = data[pos];
    if(script.clear === true) {
        $('.history').html('');
    }
    switch(script.action) {
        case 'type':
            // cleanup for next execution
            prompt.removeData();
            $('.typed-cursor').text('');
            prompt.typed({
                strings: script.strings,
                typeSpeed: 30,
                callback: function() {
                    var history = $('.history').html();
                    history = history ? [history] : [];
                    history.push('$ ' + prompt.text());
                    if(script.output) {
                        history.push(script.output);
                        prompt.html('');
                        $('.history').html(history.join('<br>'));
                    }
                    // scroll to bottom of screen
                    $('section.terminal').scrollTop($('section.terminal').height());
                    // Run next script
                    pos++;
                    if(pos < data.length) {
                        setTimeout(function() {
                            runScripts(data, pos);
                        }, script.postDelay || 1000);
                    }
                }
            });
            break;
        case 'view':

            break;
    }
}
var term = document.getElementById("terminal");
var screenSize = window.innerWidth /2
var istart = false
window.addEventListener('scroll', function() {
    if(istart == false) {
        if (window.scrollX + screenSize > term.getBoundingClientRect().y + 20) {
            istart = true;
            startTerm();
        }
        if (window.scrollX + screenSize < term.getBoundingClientRect().y - 20) {
            istart = true;
            startTerm();
        }
    }
});

