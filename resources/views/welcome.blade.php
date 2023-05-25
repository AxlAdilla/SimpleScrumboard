<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Scrumboard App</title>
  <meta name="title" content="Simple Scrumboard">
  <meta name="description" content="Simple Scrumboard">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css" />
  
  <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" >
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a href="#" class="navbar-brand text-primary">Simple Scrumboard</a>
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <div class="d-flex">
        <a href="{{ url('/api/documentation') }}">
          <button class="btn btn-outline-primary me-2">API Documentation</button>
        </a>
        <a href="https://github.com/AxlAdilla/SimpleScrumboard">
          <button class="btn btn-primary">Github</button>
        </a>
      </div>
    </div>
    </div>
  </nav>
  <section id="header-two" class="bg-white">
    <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div class="d-flex justify-content-center flex-column p-4">
        <h2 class="title text-uppercase">Welcome
        </h2>
        <p class="subtitle">Our application is designed to help you manage your project tasks and organize your work using the Scrum methodology. 
        </p>
        <div class="buttons">
          <a href="{{route('scrumboard.index')}}">
            <button class="btn btn-primary me-2">Try now</button>
          </a>
        </div>
      </div>
      </div>
      <div class="col-md-6">
      <svg width="100%" height="341" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 920.75017 740.38145" id="it57j">
        <path d="M962.87446,441.80928q0,9.97494-.54,19.81a360.63906,360.63906,0,0,1-11.36,72.57c-.01.01-.01.01,0,.02-.81995,3.14-1.69,6.27-2.61,9.37-.04.15-.08.29-.13.43006q-2.04,6.97494-4.36,13.81994v.01a362.27727,362.27727,0,0,1-343,245.97c-171.23,0-314.68-118.87-352.34-278.6a362.65664,362.65664,0,0,1-9.66-83.4q0-8.37.38-16.65a360.161,360.161,0,0,1,63.25-188.38c.46-.68.93-1.36,1.41-2.03,65.42-93.67,174.04-154.94,296.96-154.94,173.72,0,318.85,122.36,353.91,285.6a.031.031,0,0,1,.01.02q3.39,15.78,5.38,32.04A362.557,362.557,0,0,1,962.87446,441.80928Z" transform="translate(-139.62491 -79.80928)" fill="#f2f2f2">
        </path>
        <path d="M1057.14039,745.43071a96.90134,96.90134,0,0,1-12.51,27.53c-12.48,18.87-30.34,33.3-49.97,44.85-1.36.81-2.74,1.6-4.12,2.38h-13.77l-.48-1.1v-.01l-.55994-1.27-.07006-.15-.03.15-.55,2.38h-6.75989c-.55994-.79-1.11-1.58-1.65-2.38-.79-1.17-1.55005-2.35-2.27-3.55a57.6339,57.6339,0,0,1-3.39991-6.52c-.12011-.25-.22009-.5-.32007-.75l.45-.49-1.86988-8.18,3.75989-.62-4.12-12.71c.15-.47.32006-.94.5-1.41,2.31005-5.85,6.65-10.22,11.8-13.89,5.30005-3.79,11.47-6.83,17.1399-9.99,2.66015-1.49,5.28-3.06,7.83008-4.72v-.01q4.89-3.16506,9.49-6.77a1.42508,1.42508,0,0,0,.15-.11,1.06829,1.06829,0,0,0,.12-.1,140.902,140.902,0,0,0,34.31006-38.93.0098.0098,0,0,0,.01-.01c.29993-.48.57984-.96.85987-1.44995v-.01a136.25522,136.25522,0,0,0,9.41-19.65v-.01c.20007-.5.38-1,.57-1.5q.39.66.75,1.32a.0098.0098,0,0,1,.01.01C1061.55042,705.11071,1062.47046,726.01073,1057.14039,745.43071Z" transform="translate(-139.62491 -79.80928)" fill="#f0f0f0">
        </path>
        <path d="M1051.85035,687.76073a121.36532,121.36532,0,0,1-2.86988,27.54,118.54078,118.54078,0,0,1-3.3601,12.24,121.34541,121.34541,0,0,1-10.12989,22.6c-.23.39-.45007.77-.69006,1.15v.01a102.347,102.347,0,0,1-5.75,8.66,47.72183,47.72183,0,0,1-11.4,11.46,30.08876,30.08876,0,0,1-11.98,4.63c-.80005.15-1.62.26-2.45.36005-3.31005.38995-6.73.54-10.01,1.24a21.84833,21.84833,0,0,0-4.82006,1.55c-5.28,2.45-8.25,7.58-9.55005,13.06-.23.96-.40992,1.93-.54993,2.9-1.09,7.45.11,15.19-.51,22.65-.06995.79-.16,1.59-.2699,2.38h-.74011l-.48-1.1v-.01c.04993-.42.09-.84.13-1.27a96.29456,96.29456,0,0,0,.09008-11.01c-.04-1.65-.07007-3.31-.05-4.97.02-1.33.06995-2.66.16993-3.98v-.01c.07006-.82.15-1.63.26-2.44a31.58574,31.58574,0,0,1,1.82006-7.25,18.15179,18.15179,0,0,1,10.31995-10.68,26.99328,26.99328,0,0,1,4.47009-1.25c3.34986-.64,6.80994-.8,10.17993-1.22.36-.04.72-.09,1.07007-.15.44995-.07.8899-.15,1.32984-.23a28.66623,28.66623,0,0,0,12.16015-5.27,51.9033,51.9033,0,0,0,10.98-11.92005c1.6399-2.35,3.2-4.75,4.64991-7.22a.0098.0098,0,0,1,.01-.01c.07006-.12.14-.23.21-.35l.01-.02a119.57149,119.57149,0,0,0,13.46008-34.17c.09-.44.19006-.88.28992-1.32a120.88781,120.88781,0,0,0,2.67-26.4v-.01c0-.42-.00989-.82995-.0199-1.25-.02-.86,1.30994-1.05,1.32984-.19.01.42.02.84.01,1.26A.0098.0098,0,0,1,1051.85035,687.76073Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M1034.22955,751.01965a18.01811,18.01811,0,0,0,22.69431-5.41582c.50869-.69934-.55416-1.52268-1.06353-.8224a16.68437,16.68437,0,0,1-21.12073,4.99469c-.76923-.39533-1.27488.85047-.51005,1.24353Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M1006.2088,775.01911a34.72851,34.72851,0,0,1,1.2295-25.27921c.35485-.78953-.88911-1.29862-1.24353-.51a36.12286,36.12286,0,0,0-1.22594,26.3079c.27856.82057,1.517.29747,1.24-.51865Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M1048.23681,714.46342a10.19912,10.19912,0,0,1-7.02236-6.65925c-.268-.82369-1.50625-.29968-1.24.51865a11.42894,11.42894,0,0,0,7.75229,7.38413.69463.69463,0,0,0,.87679-.36674.67543.67543,0,0,0-.36675-.87679Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M996.17042,754.97075v.01a131.24739,131.24739,0,0,1-2.66993,21.24v.01c-.08007.48-.19006.95-.29,1.42005a184.49564,184.49564,0,0,1-10.1101,31.61q-1.78491,4.32-3.74,8.55c-.35987.8-.73,1.59-1.10987,2.38h-1.4801l-.48-1.1v-.01l-.55994-1.27-.07006-.15-.03.15-.55,2.38H960.7804l-2.77991-2.38-4.05005-3.47,5.65992-6.18.93-1.02.14-.15.45-.49-1.86988-8.18,3.75989-.62-4.12-12.71-1.95-6.01-.49-1.51-2.85009-8.79-8.59986,1.61005-1.40014-4.9a135.98986,135.98986,0,0,0,6.42-18.41c.01-.05.03-.09.04-.13995a141.583,141.583,0,0,0,4.0199-51.96v-.01c-.05994-.56-.12989-1.13-.21-1.68v-.02a133.6311,133.6311,0,0,0-4.31995-21.34c-.14-.53-.29993-1.05-.45007-1.57.46008.2.91.39,1.37011.59l.01.01h.02c.73.32,1.46.66,2.16992,1.02,17.06006,8.29,29.61,23.85,36.74,41.79.02.05.04.09.06.14a96.39369,96.39369,0,0,1,6.57,29.43A114.87063,114.87063,0,0,1,996.17042,754.97075Z" transform="translate(-139.62491 -79.80928)" fill="#f0f0f0">
        </path>
        <path d="M970.22046,820.19072h-1.58007c-.5-.81-1.04-1.6-1.58-2.38q-1.29-1.81494-2.66-3.55c-.79-1-1.58-1.99-2.37-2.98-.81995-1.03-1.63-2.06-2.42-3.12l.93-1.02c.15.2.29993.4.46008.6,2.55994,3.37,5.32984,6.61005,7.69995,10.07C969.23047,818.59075,969.74048,819.38073,970.22046,820.19072Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M948.77849,670.81953c.26.33.53.67.78,1.01q2.925,3.795,5.53,7.83a117.98985,117.98985,0,0,1,8.22,14.85c.19.4.38.81.56,1.22a119.26359,119.26359,0,0,1,9.84,35.44c.02.12.03.23.04.35q.49493,4.29.64,8.61a51.78274,51.78274,0,0,1-1.59,16.12c-.2.69-.42,1.37-.66,2.03a27.34469,27.34469,0,0,1-2.25,4.65,27.92323,27.92323,0,0,1-2.14,3.09c-.47.6-.96,1.19-1.48,1.76-.3.33-.61.66-.92.99-.26.25-.51.51-.77.76-2.7,2.62-5.68,5.05-8.12,7.94l.49,1.51c2.35-2.98,5.37994-5.45,8.11-8.05a37.89641,37.89641,0,0,0,4.66-5.28c.18-.26.37-.52.54-.79a26.74859,26.74859,0,0,0,2.38995-4.29c.34-.75.65-1.52.93-2.32a47.89274,47.89274,0,0,0,2.2-16,103.418,103.418,0,0,0-.62-10.39c-.04-.44995-.09-.88995-.15-1.34a121.63824,121.63824,0,0,0-5.52-24.14,122.65985,122.65985,0,0,0-13.76-28.18q-2.475-3.765-5.25-7.35c-.24-.33-.49-.65-.75-.98C949.19853,669.18953,948.24852,670.13954,948.77849,670.81953Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M974.53248,731.98591a18.01811,18.01811,0,0,0,14.85943-17.98777.67262.67262,0,0,0-1.34431-.01633A16.68436,16.68436,0,0,1,974.191,730.68593c-.8522.14749-.50587,1.44662.34145,1.3Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M966.60881,768.01856a34.72847,34.72847,0,0,1-14.23814-20.92428c-.192-.844-1.49177-.50157-1.3.34145A36.12285,36.12285,0,0,0,965.931,769.17922c.71645.48747,1.39034-.67584.67778-1.16066Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M963.70711,694.36446a10.19913,10.19913,0,0,1-9.61629-1.08908c-.70992-.49631-1.38308.66758-.67778,1.16066a11.429,11.429,0,0,0,10.63552,1.22839.69461.69461,0,0,0,.47927-.82071.67545.67545,0,0,0-.82072-.47926Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M772.94149,236.78346H140.61813a1.01559,1.01559,0,0,1,0-2.03069H772.94149a1.01559,1.01559,0,0,1,0,2.03069Z" transform="translate(-139.62491 -79.80928)" fill="#cacaca">
        </path>
        <ellipse cx="23.34831" cy="131.59051" rx="10.92534" ry="11.16881" fill="#3f3d56">
        </ellipse>
        <ellipse cx="61.09038" cy="131.59051" rx="10.92534" ry="11.16881" fill="#3f3d56">
        </ellipse>
        <ellipse cx="98.83246" cy="131.59051" rx="10.92534" ry="11.16881" fill="#3f3d56">
        </ellipse>
        <path d="M750.32447,202.99928h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M750.32447,210.61927h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M750.32447,218.22926h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M306.28443,278.15925H277.89448a359.32176,359.32176,0,0,0-33.45,100.05h61.84a14.97405,14.97405,0,0,0,15-15v-70.06A15.00977,15.00977,0,0,0,306.28443,278.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="imhh6">
        </path>
        <path d="M516.59443,278.15925H387.96449a15.00977,15.00977,0,0,0-15,14.99v70.06a15.01828,15.01828,0,0,0,15,15H516.59443a15.01828,15.01828,0,0,0,15-15v-70.06A15.00977,15.00977,0,0,0,516.59443,278.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="i5ewi">
        </path>
        <path d="M726.90449,278.15925h-128.63a15.00977,15.00977,0,0,0-15,14.99v70.06a15.01828,15.01828,0,0,0,15,15h128.63a15.01832,15.01832,0,0,0,15-15v-70.06A15.00981,15.00981,0,0,0,726.90449,278.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="izdbv">
        </path>
        <path d="M306.28443,425.15925h-67.03q-.375,8.28-.38,16.65a362.65664,362.65664,0,0,0,9.66,83.4h57.75a15.01828,15.01828,0,0,0,15-15v-70.06A15.00977,15.00977,0,0,0,306.28443,425.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="ip7fj">
        </path>
        <path d="M516.59443,425.15925H387.96449a15.00977,15.00977,0,0,0-15,14.99v70.06a15.01828,15.01828,0,0,0,15,15H516.59443a15.01828,15.01828,0,0,0,15-15v-70.06A15.00977,15.00977,0,0,0,516.59443,425.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="i19vh">
        </path>
        <path d="M726.90449,425.15925h-128.63a15.00977,15.00977,0,0,0-15,14.99v70.06a15.01828,15.01828,0,0,0,15,15h128.63q.615,0,1.23-.06a14.303,14.303,0,0,0,4.66-1.15,15.0202,15.0202,0,0,0,9.11005-13.65v-70.2A15.00981,15.00981,0,0,0,726.90449,425.15925Z" transform="translate(-139.62491 -79.80928)" fill="#ccc" id="iv5a5">
        </path>
        <circle cx="169.34425" cy="285.37316" r="29.75918" fill="#6c63ff">
        </circle>
        <path d="M304.9094,380.6707a3.30934,3.30934,0,0,1-2.648-1.32439l-8.11876-10.82519a3.31022,3.31022,0,1,1,5.29649-3.97209l5.31157,7.08155,13.64208-20.46285a3.31036,3.31036,0,1,1,5.50877,3.67251L307.664,379.19652a3.3117,3.3117,0,0,1-2.66252,1.47311C304.97082,380.67017,304.94011,380.6707,304.9094,380.6707Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <circle cx="386.34425" cy="288.37316" r="29.75918" fill="#6c63ff">
        </circle>
        <path d="M521.9094,383.6707a3.30934,3.30934,0,0,1-2.648-1.32439l-8.11876-10.82519a3.31022,3.31022,0,1,1,5.29649-3.97209l5.31157,7.08155,13.64208-20.46285a3.31036,3.31036,0,0,1,5.50877,3.67251l-16.23752,24.35628a3.3117,3.3117,0,0,1-2.66252,1.47311C521.97082,383.67017,521.94011,383.6707,521.9094,383.6707Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M950.93528,528.54445l-9.315-90.16375-2.45863-37.10843,26.07234-4.7144s3.90423,25.5103,7.31974,40.48087c3.37052,14.77276-4.49018,89.52617-4.69845,91.49765a12.68492,12.68492,0,1,1-16.92.00806Z" transform="translate(-139.62491 -79.80928)" fill="#a0616a">
        </path>
        <polygon points="744.583 717.124 731.653 720.08 714.099 671.614 733.182 667.251 744.583 717.124" fill="#a0616a">
        </polygon>
        <path d="M886.54444,791.95924l-3.3.75-.34.08-15.09-2.46-.44-.06994-6.3,7.52a16.65187,16.65187,0,0,0-12.52,19.94l.02.09.11.44,1.92-.44,39.77-9.1Z" transform="translate(-139.62491 -79.80928)" fill="#2f2e41">
        </path>
        <polygon points="821.665 725.578 808.401 725.578 802.092 674.418 821.667 674.419 821.665 725.578" fill="#a0616a">
        </polygon>
        <path d="M960.94447,801.05928l-1.16-.47-13-5.29-.42-.17-7.81,5.93a16.64417,16.64417,0,0,0-16.65,16.64v.54l36.61.01h6.16v-17.19Z" transform="translate(-139.62491 -79.80928)" fill="#2f2e41">
        </path>
        <path d="M941.1166,531.57613l11.15583,105.98071s14.851,106.11694,12.062,120.759.69723,16.7338.69723,16.7338l-25.44814-1.81236s.69723-9.06416-3.48624-13.24757-2.09168-16.73381-2.09168-16.73381L884.64008,570.62166l-29.98137,90.64141s18.94048,73.505,18.24326,74.8995,12,32,12,32l-28.40811,9.42052s3.48619-11.15584-1.3945-14.64208-9.06416-.69722-4.88069-6.97242-32.96106-52.36048-32.14422-82.061c.24572-8.93447.54273-18.52067.89967-28.34222,1.8888-51.97284,5.45554-110.53594,11.97835-113.9892C842.80559,525.30093,941.1166,531.57613,941.1166,531.57613Z" transform="translate(-139.62491 -79.80928)" fill="#2f2e41">
        </path>
        <circle cx="748.66002" cy="209.74428" r="27.4387" fill="#a0616a">
        </circle>
        <path d="M979.902,457.16257l-37.2588,9.45768.2588-10.45768-2.82783-3-5.65-29.59721-5.999-76.62693L949.01367,357.858l.02512.01933a55.66237,55.66237,0,0,1,8.928,13.21991c7.76155,15.77859,15.21745,50.5331,19.12034,70.71919a2.20293,2.20293,0,0,0,.74253,1.07,11.41539,11.41539,0,0,1,2.07234,14.27623Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M759.725,491.071s51.42772-54.21874,51.9073-55.24066c3.59241-27.28049,13.92471-39.31418,15.47362-38.00777l26.66794,9.23874s-7.93233,25.119-13.303,40.03927c-5.13191,14.25688-64.278,49.07986-65.265,50.79912A12.68491,12.68491,0,1,1,759.725,491.071Z" transform="translate(-139.62491 -79.80928)" fill="#a0616a">
        </path>
        <path d="M866.58449,351.87331s-23.08916-11.31585-32.04437,10.909c-4.90935,12.547-17.46581,42.998-23.72314,61.743a1.40049,1.40049,0,0,1-.17043.33618,15.24092,15.24092,0,0,0-2.59637,8.40919,2.86268,2.86268,0,0,1-.06764.64912s25.37273,4.943,32.91943,18.2428l2.9933-3.24832.53212-2.27586Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M950.59948,543.12714c-53.13861,10.97387-123.55809-7.89282-123.55809-7.89282l18.78516-81.42974L839.148,368.587c-.81559-10.42111,5.11995-20.18969,14.35391-23.65126l12.75006-4.7756,10.53881-15.088,30.10339.98771L918.9283,341.9l9.49679,5.03843L949.01366,357.858l.0906.04524v.04524l-6.46109,62.67179-3.89653,37.78781s11.8347,42.49992,9.40608,48.13646c-2.42851,5.62736-.317,2.90881.2719,5.91729.589,3.0086,2.39234,3.19886,2.66413,9.12533C951.36972,527.50455,950.59948,543.12714,950.59948,543.12714Z" transform="translate(-139.62491 -79.80928)" fill="#3f3d56">
        </path>
        <path d="M918.05044,279.78283c-2.16834-2.13913,1.09578-7.80233.4792-10.78526-.70685-3.42-4.4755-3.52009-5.37449-6.89472-.96725-3.63026-4.83512-5.60656-8.41163-6.7571a54.391,54.391,0,0,0-28.34666-1.29833,108.2013,108.2013,0,0,0-12.26345,3.77772c-2.76789.9741-.09867-1.67664-2.86645-.70253a4.34484,4.34484,0,0,0-2.59521,1.72188c-.49756.9408.17345,2.44543,1.22034,2.25484q-5.06841,2.23519-10.13705,4.47041,2.84267,2.97772,5.68533,5.95567c-2.694-.7668-5.5663,2.44533-4.50415,5.03711a5.69338,5.69338,0,0,0,4.35648,3.01589c3.04365.59225.73505,3.4889,3.83535,3.43248s24.71949-6.41153,26.22666-3.70172c1.07322,1.92962.95519,4.48556,2.48758,6.07537,1.9606,2.03393,5.3839,1.29013,7.87944-.03408,2.49544-1.32409,5.02627-3.144,7.83353-2.82651,2.93072.33141,5.14729,5.74728,5.86907,8.60709.72189,2.8598.26592,5.86884-.19347,8.78241-.60331,3.82639-6.64373,7.65267-7.247,11.47895,6.704,1.854,13.89541-4.04486,16.54582-14.30314C918.26559,290.6046,922.67051,284.34107,918.05044,279.78283Z" transform="translate(-139.62491 -79.80928)" fill="#2f2e41">
        </path>
        <circle cx="594.34425" cy="430.37316" r="29.75918" fill="#6c63ff">
        </circle>
        <path d="M729.9094,525.6707a3.30934,3.30934,0,0,1-2.648-1.32439l-8.11876-10.82519a3.31022,3.31022,0,1,1,5.29649-3.97209l5.31157,7.08155,13.64208-20.46285a3.31036,3.31036,0,1,1,5.50877,3.67251l-16.23752,24.35628a3.3117,3.3117,0,0,1-2.66252,1.47311C729.97082,525.67017,729.94011,525.6707,729.9094,525.6707Z" transform="translate(-139.62491 -79.80928)" fill="#fff">
        </path>
        <path d="M1054.57044,819.00072a1.18646,1.18646,0,0,1-1.19006,1.19h-280.29a1.19,1.19,0,0,1,0-2.38h280.29A1.18651,1.18651,0,0,1,1054.57044,819.00072Z" transform="translate(-139.62491 -79.80928)" fill="#ccc">
        </path>
      </svg>
      </div>
    </div>
    </div>
  </section>
  <section id="footer">
    <div class="container py-4">
    <div class="row">
      <div class="col-md-4">
      <h3 class="text-primary">Simple Scrumboard
      </h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla unde eum dolor, recusandae iusto dolorum.
      </p>
      </div>
      <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
          <b>SITE MAP
          </b>
          </li>
          <li class="list-group-item ">
          <a href="{{ url('/api/documentation') }}" class="link sitemap-items">API Documentation</a>
          </li>
          <li class="list-group-item sitemap-items">
          <a href="https://github.com/AxlAdilla/SimpleScrumboard" class="link sitemap-items">Github</a>
          </li>
          <li class="list-group-item sitemap-items">
          <a href="{{route('scrumboard.index')}}" class="link sitemap-items">Go To App</a>
          </li>
        </ul>
        </div>
      </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
      <p class="text-center text-muted">
        <small id="irz3k">© 2023 | Axl Adilla| All Rights Reserved.</small>
      </p>
      </div>
    </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets/js/global.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
