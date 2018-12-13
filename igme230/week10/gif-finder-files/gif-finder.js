//1 initialize search term as an empty string
let displayTerm = "";

//2  main function
function getData() {
    console.log("getData() called");

    const GIPHY_URL = "https://api.giphy.com/v1/gifs/search?";
    const GIPHY_KEY = "BVPf1N4FwsXGSi2K8gFjlIRscncQb55f";
    let url = GIPHY_URL + "api_key=" + GIPHY_KEY;

    let displayTerm = "'" + document.querySelector('#searchterm').value + "'";

    let term = displayTerm;

    term = encodeURIComponent(term);

    if (term.length < 1) return;

    url = url + "&q=" + term;

    let limit = document.querySelector('#limit').value;

    url += "&limit=" + limit;

    let content = document.querySelector('#content');
    content.innerHTML = "<strong>Searching for " + displayTerm + "</strong>";

    console.log(url);

    console.log(jQuery);
    console.log($); // $ is an alias to the jQuery object

    let obj = $.ajax({
        dataType: "json",
        url: url,
        data: null,
        success: jsonLoaded // the callback function
    })

    function jsonLoaded(obj) {
        console.log("obj = " + obj);
        console.log("obj stringified = " + JSON.stringify(obj));

    // if there are no results, print a message and return
    if (!obj.data || obj.data.length == 0) {
        document.querySelector("#content").innerHTML = `<p><em>No results found for '${displayTerm}'</em></p>`;
        $("#content").fadeIn(500);
        return; // Bail out
    }

    /* If there is an array of results, loop through them, and create new elements in the HTML to display each of them. */

    let results = obj.data
    console.log("results.length = " + results.length);
    let bigString = "<p><em>Here are " + results.length + " results for '" + displayTerm + "'</em></p>";

    for (let i = 0; i < results.length; i++) {
        let result = results[i];
        let smallURL = result.images.fixed_width_small.url;
        let url = result.url;
        if (!smallURL) smallURL = "images/no-image-found.png";

        // ES6 String Templating
        var line = `<div class='result'><a target='_blank' href='${url}'><img src='${smallURL}' title= '${result.id}' />`;
        line += `<br />View on Giphy</a></div>`;

        bigString += line;
    }

    document.querySelector("#content").innerHTML = bigString;
    }
}

//3 set up event handler for button click to call function
document.querySelector("#search").onclick = getData;

