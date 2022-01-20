(function() {
    let year_start = 1940;
    let year_end = (new Date).getFullYear(); // current year
    let year_selected = 1992;

    let option = '';
    option = '<option>Year</option>'; // first option

    for (let i = year_start; i <= year_end; i++) {
        let selected = (i === year_selected ? ' selected' : '');
        option += '<option value="' + i + '"' + selected + '>' + i + '</option>';
    }

    document.getElementById("ab").innerHTML = option;
})();