var seasons_data_url = "courses.json";


$(document).ready(function(){
    console.log("DOM READY!");
    var course_template_source = $('#courselisttemplate').html();
    var course_template_compiled = Handlebars.compile(course_template_source);

    console.log(course_template_source);
    console.log(course_template_compiled);

    $('#course_search_form').submit(function (e) {
        console.log("form submitted!")
        var search_term = $('#search_query').val();
        console.log("search term is: " + search_term);
        $.getJSON('courses.json', {
                'keyword': search_term,
                'output': 'json'
            },
            function (data) {
                console.log("data retrieved is: ");
                console.log(data);
                var myresult = course_template_compiled(data);
                $('#courselist').html(myresult);
            }
        )
        e.preventDefault();
    });
 });