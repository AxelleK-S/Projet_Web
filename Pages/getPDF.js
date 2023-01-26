function getPDF() {
    var source = document.getElementsByTagName("body")[0];
    var specialElementHandlers = {
        '#getPDF': function (element, renderer) {
            return true;
        }
    };
    var doc = new jsPDF({
        orientation: 'landscape', unit : 'mm', format : 'a4', hotfixes : []
    });
    doc.setFontType("normal");
    doc.setFontSize(24);
    doc.fromHTML(source, 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    doc.save("test")
}