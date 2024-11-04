var paragraph = document.querySelectorAll('.project-txt-cont p');
// voeg ... toe aan elk project, niet alleen het eerste
paragraph.forEach(function(paragraph) { 
    var paragraphText = paragraph.textContent;
    // voeg ... aan het einde van de text toe
    var concate = " ...";
    
    // als de tekst langer is dan 100 karakters...
    if (paragraphText.length > 100) {
        // slice de rest van de tekst en zet ... aan het einde
        var newText = paragraphText.slice(0, 100) + concate;
    
        paragraphText = newText;
        paragraph.innerHTML = paragraphText;
    }
});
