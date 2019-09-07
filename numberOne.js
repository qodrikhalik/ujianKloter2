var bio = {
    // string
    name: 'Qodri Ahmad Khalik',
    // number
    age: 17,
    // string
    address: 'jl. Guru Suman, Gg. Lengkio, No.16',
    // array
    hobbies: ['Gaming', 'Masak', 'Hiking', 'ngoding'],
    // boolean
    is_married: false,
    // array of object
    list_school: [
        muhammadiyah = {
            'year_in': 2007,
            'year_out': 2013,
            'major': null
        },

        al_hijrah = {
            'year_in': 2013,
            'year_out': 2016,
            'major': null
        },

        tritech_informatika = {
            'year_in': 2016,
            'year_out': 2019,
            'major': 'rekayasaPerangkatLunak'
        }
    ],
    // array of object
    skills: [{
            'skill_name': 'ngoding',
            'level': 'beginner'
        },
        {
            'skill_name': 'masak',
            'level': 'advanced'
        }
    ],

    // boolean
    interest_in_coding: true

}

alert(JSON.stringify(bio))


// bio adalah object yang di dalam nya terdapat propeti, dan bbrp di antara properti nya merupakan array of object
// object dapat memiliki lebih dari 1 properti