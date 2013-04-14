function getMajor(data) {
    var data = [
        {
            title : 'Landscape Architecture',
            description : 'The design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes.'
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Landscape Architecture',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Early Childhood Education',
            description : ' the design of outdoor public areas, landmarks, and structures to achieve environmental, social-behavioral, or aesthetic outcomes. '
        },
        {
            title : 'Applied mathematics',
            description : 'The term "applied mathematics" also describes the professional specialty in which mathematicians work on practical problems; as a profession focused on practical problems, applied mathematics focuses on the formulation and study of mathematical models.'
        },
        {
            title : 'Home Economics',
            description : 'Home economics is a field of formal study including such topics as consumer education, institutional management, interior design, home furnishing, cleaning, handicrafts, sewing, clothing and textiles, commercial cooking, cooking, nutrition, food preservation, hygiene, child development, managing money, and family relationships. This teaches students how to properly run a family environment and make the world a better place for generations to come.'
        },
        '',
        '',
        'Early Childhood Education',
        'Anatomy',
        'Biochemistry',
        'Ecology',
        'Toxicology',
        'Interior Design',
        'Criminal Science',
        'European History',
        'Industrial Psychology',
        'Development Psychology',
        'Physiological Psychology'
    ];
    $.ajax({
        url: url,
        data: data,
        success: success,
        dataType: dataType
    });
}

function getColleges(major) {
    $.ajax({
        url: url,
        data: data,
        success: success,
        dataType: dataType
    });
}

function getBooks(major) {
    $.ajax({
        url: url,
        data: data,
        success: success,
        dataType: dataType
    });
}

$(document).ready(function() {

});
