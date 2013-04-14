//+ Jonas Raoni Soares Silva
//@ http://jsfromhell.com/array/shuffle [v1.0]
function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};

function getMajors() {
    var data = [
        {
            title : 'Landscape Architecture',
            description : 'The design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes.'
        },
        {
            title : 'Physiological Psychology',
            description : 'A subdivision of behavioral neuroscience (biological psychology) that studies the neural mechanisms of perception and behavior through direct manipulation of the brains of nonhuman animal subjects in controlled experiments.'
        },
        {
            title : 'Developmental Psychology',
            description : 'The scientific study of changes that occur in human beings over the course of their life span. Originally concerned with infants and children, the field has expanded to include adolescence, adult development, aging, and the entire life span.'
        },
        {
            title : 'Industrial Psychology',
            description : ' the scientific study of employees, workplaces, and organizations. Industrial and organizational psychologists contribute to an organization\'s success by improving the workplace and the performance, satisfaction and well-being of its people.'
        },
        {
            title : 'Criminal Science',
            description : 'The study of crime in order to find ways to prevent it. Three features distinguish crime science from criminology: it is single-minded about cutting crime, rather than studying it for its own sake; accordingly it focuses on crime rather than criminals; and it is multidisciplinary, notably recruiting scientific methodology rather than relying on social theory.'
        },
        {
            title : 'Interior Design',
            description : 'Describes a group of various yet related projects that involve turning an interior space into an "effective setting for the range of human activities" that are to take place there.[1] An interior designer is someone who conducts such projects.'
        },
        {
            title : 'Toxicology',
            description : 'A branch of biology, chemistry, and medicine concerned with the study of the adverse effects of chemicals on living organisms.[1] It is the study of symptoms, mechanisms, treatments and detection of poisoning, especially the poisoning of people.'
        },
        {
            title : 'Ecology',
            description : 'The scientific study of the relationships that living organisms have with each other and with their abiotic environment. Topics of interest to ecologists include the composition, distribution, amount (biomass), number, and changing states of organisms within and among ecosystems.'
        },
        {
            title : 'Biochemistry',
            description : ' the study of chemical processes within, and relating to, living organisms.'
        },
        {
            title : 'Anatomy',
            description : 'a branch of biology and medicine that considers the structure of living things. It is a general term that includes human anatomy, animal anatomy (zootomy), and plant anatomy (phytotomy).'
        },
        {
            title : 'Early Childhood Education',
            description : 'The formal teaching of young children by people outside the family or in settings outside the home.'
        },
        {
            title : 'Applied mathematics',
            description : 'The term "applied mathematics" also describes the professional specialty in which mathematicians work on practical problems; as a profession focused on practical problems, applied mathematics focuses on the formulation and study of mathematical models.'
        },
        {
            title : 'Home Economics',
            description : 'Home economics is a field of formal study including such topics as consumer education, institutional management, interior design, home furnishing, cleaning, handicrafts, sewing, clothing and textiles, commercial cooking, cooking, nutrition, food preservation, hygiene, child development, managing money, and family relationships. This teaches students how to properly run a family environment and make the world a better place for generations to come.'
        }
    ];

    var to_return = [];

    var shuffled = shuffle(data);

    to_return.push(shuffled.pop());
    to_return.push(shuffled.pop());
    to_return.push(shuffled.pop());

    return to_return;
}

$(document).ready(function() {
    var majors = getMajors(),
        $list = $('#recommended_majors');

    $.each(majors, function(i) {
        $list.append('<li><button class="btn">' + majors[i].title + '</button></li>');
    });

    $("body").on("click", "#recommended_majors li", function(){
        alert('here');
    });
});


