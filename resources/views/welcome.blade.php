<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/picks') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Current Week Picks</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="flex justify-center mx-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center pl-6 pr-4 pt-8">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="225px" height="49px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g><path style="opacity:0.963" fill="#4338CA" d="M -0.5,-0.5 C 16.8333,-0.5 34.1667,-0.5 51.5,-0.5C 51.5,2.83333 51.5,6.16667 51.5,9.5C 36.163,9.66659 20.8297,9.49992 5.5,9C 2.64986,7.97912 0.649863,6.14578 -0.5,3.5C -0.5,2.16667 -0.5,0.833333 -0.5,-0.5 Z"/></g>
                                <g><path style="opacity:0.939" fill="#4338CA" d="M 67.5,-0.5 C 78.8333,-0.5 90.1667,-0.5 101.5,-0.5C 102.057,3.88841 100.39,7.05507 96.5,9C 83.5,9.66667 70.5,9.66667 57.5,9C 59.4404,4.22272 62.7737,1.05606 67.5,-0.5 Z"/></g>
                                <g><path style="opacity:0.953" fill="#4338CA" d="M 115.5,-0.5 C 129.5,-0.5 143.5,-0.5 157.5,-0.5C 166.394,4.45127 168.894,11.7846 165,21.5C 163.978,22.354 163.145,23.354 162.5,24.5C 166.313,29.1502 167.48,34.4836 166,40.5C 163.902,44.1028 161.068,46.7695 157.5,48.5C 143.5,48.5 129.5,48.5 115.5,48.5C 115.5,38.8333 115.5,29.1667 115.5,19.5C 128.171,19.6666 140.838,19.4999 153.5,19C 158.833,16 158.833,13 153.5,10C 142.167,9.66667 130.833,9.33333 119.5,9C 115.954,6.55739 114.621,3.39072 115.5,-0.5 Z M 124.5,29.5 C 134.506,29.3335 144.506,29.5002 154.5,30C 158.5,32.6667 158.5,35.3333 154.5,38C 144.506,38.4998 134.506,38.6665 124.5,38.5C 124.5,35.5 124.5,32.5 124.5,29.5 Z"/></g>
                                <g><path style="opacity:0.95" fill="#4338CA" d="M 173.5,-0.5 C 187.5,-0.5 201.5,-0.5 215.5,-0.5C 219.5,1.5 222.5,4.5 224.5,8.5C 224.5,12.5 224.5,16.5 224.5,20.5C 222.685,24.4788 219.685,27.3122 215.5,29C 204.505,29.4998 193.505,29.6665 182.5,29.5C 182.5,35.8333 182.5,42.1667 182.5,48.5C 179.5,48.5 176.5,48.5 173.5,48.5C 173.5,38.8333 173.5,29.1667 173.5,19.5C 186.171,19.6666 198.838,19.4999 211.5,19C 216.384,16.4725 216.717,13.4725 212.5,10C 201.167,9.66667 189.833,9.33333 178.5,9C 174.087,7.02124 172.42,3.85457 173.5,-0.5 Z"/></g>
                                <g><path style="opacity:0.924" fill="#4338CA" d="M 30.5,48.5 C 27.5,48.5 24.5,48.5 21.5,48.5C 21.5,38.5 21.5,28.5 21.5,18.5C 24.5,18.5 27.5,18.5 30.5,18.5C 30.5,28.5 30.5,38.5 30.5,48.5 Z"/></g>
                                <g><path style="opacity:0.948" fill="#4338CA" d="M 100.5,48.5 C 86.1667,48.5 71.8333,48.5 57.5,48.5C 57.5,45.1667 57.5,41.8333 57.5,38.5C 70.8375,38.6666 84.1708,38.4999 97.5,38C 101.5,35.3333 101.5,32.6667 97.5,30C 86.1667,29.6667 74.8333,29.3333 63.5,29C 59.361,27.2289 57.361,24.0622 57.5,19.5C 71.8372,19.3334 86.1705,19.5001 100.5,20C 108.61,24.0636 111.443,30.5636 109,39.5C 107.312,43.6852 104.479,46.6852 100.5,48.5 Z"/></g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center p-6 text-center text-md text-gray-500">
                <h1>The Second Best Pool</h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>
