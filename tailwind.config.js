/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./*.html'],
    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px'
        },
        extend: {
            colors: {
                pageBackgroundGray: 'rgb(49, 47, 48)',
                logoText: 'rgb(172, 176, 177)',
                navTextActive: 'rgb(239, 239, 239)',
                navTextHover: 'rgb(190, 190, 190)',
                greyBorder: 'rgb(109, 109, 109)',
                iconHeadline: 'rgb(138, 106, 81)',
                quoteColor: 'rgb(197, 181, 168)'
            },
        },
    },
    plugins: [],
}