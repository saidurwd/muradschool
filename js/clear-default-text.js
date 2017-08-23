/*
 * Clear Default Text: functions for clearing and replacing default text in
 * <input> elements.
 */
addEvent(window, 'load', init, false);

function init() {
    var formInputs = document.getElementsByTagName('input');
    for (var i = 0; i < formInputs.length; i++) {
        var theInput = formInputs[i];
        
        if (theInput.type == 'text' && theInput.className.match(/\bcleardefault\b/)) {  
            /* Add event handlers */          
            addEvent(theInput, 'focus', clearDefaultText, false);
            addEvent(theInput, 'blur', replaceDefaultText, false);
            
            /* Save the current value */
            if (theInput.value != '') {
                theInput.defaultText = theInput.value;
            }
        }
    }
}

function clearDefaultText(e) {
    var target = window.event ? window.event.srcElement : e ? e.target : null;
    if (!target) return;
    
    if (target.value == target.defaultText) {
        target.value = '';
    }
}

function replaceDefaultText(e) {
    var target = window.event ? window.event.srcElement : e ? e.target : null;
    if (!target) return;
    
    if (target.value == '' && target.defaultText) {
        target.value = target.defaultText;
    }
}

function open_easteregg(page,pagename,myvars) {
    filename = 'http://www.citel.com/Products/Portico/Easteregg/index.html';
	var pagename = 'Portico';
	var args = 'width=475,height=350,directories=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no';
    window.open(filename,pagename,args);
    return false;
}