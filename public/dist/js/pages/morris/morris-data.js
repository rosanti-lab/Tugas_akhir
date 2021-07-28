// Dashboard 1 Morris-chart


$(function () {

    var belm = 0, sedang = 0, sudah = 0, tolak = 0

    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$.ajax({
      type : 'GET',
      url: '/chart',
      success: function(response){
        pie = response.titit
        for(var i = 1; i <= pie.length; i++){
            belm = pie[i].blm
            sedang = pie[i].sedang
            sudah = pie[i].sudah
            tolak = pie[i].tolak
        }
        // console.log(pie)
        // total = pie.total
        // console.log('belum : '+belum+' Sedang : '+sedang+' Selesai : '+selesai)
        // "use strict";

        Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'Januari',
            a: pie[1].blm,
            b: pie[1].sedang,
            c: pie[1].sudah,
            d: pie[1].tolak,

        },{
            y: 'Februari',
            a: pie[2].blm,
            b: pie[2].sedang,
            c: pie[2].sudah,
            d: pie[2].tolak,

        },{
            y: 'Maret',
            a: pie[3].blm,
            b: pie[3].sedang,
            c: pie[3].sudah,
            d: pie[3].tolak,

        },{
            y: 'April',
            a: pie[4].blm,
            b: pie[4].sedang,
            c: pie[4].sudah,
            d: pie[4].tolak,

        },{
            y: 'Mei',
            a: pie[5].blm,
            b: pie[5].sedang,
            c: pie[5].sudah,
            d: pie[5].tolak,

        },{
            y: 'Juni',
            a: pie[6].blm,
            b: pie[6].sedang,
            c: pie[6].sudah,
            d: pie[6].tolak,

        },{
            y: 'Juli',
            a: pie[7].blm,
            b: pie[7].sedang,
            c: pie[7].sudah,
            d: pie[7].tolak,

        },{
            y: 'Agustus',
            a: pie[8].blm,
            b: pie[8].sedang,
            c: pie[8].sudah,
            d: pie[8].tolak,

        },{
            y: 'September',
            a: pie[9].blm,
            b: pie[9].sedang,
            c: pie[9].sudah,
            d: pie[9].tolak,

        },{
            y: 'Oktober',
            a: pie[10].blm,
            b: pie[10].sedang,
            c: pie[10].sudah,
            d: pie[10].tolak,

        },{
            y: 'November',
            a: pie[11].blm,
            b: pie[11].sedang,
            c: pie[11].sudah,
            d: pie[11].tolak,

        },{
            y: 'Desember',
            a: pie[12].blm,
            b: pie[12].sedang,
            c: pie[12].sudah,
            d: pie[12].tolak,

        }],
        xkey: 'y',
        ykeys: ['a', 'b','c', 'd'],
        labels: ['Belum Diproses', 'Sedang Diproses', 'Selesai Diproses' ,'Ditolak' ],
        barColors:['#ff4f70', '#fdc16a','#22ca80','#5a5a5a'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
        });

  

    var month = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']

    line = response.chartData
    // console.log(line)
    bulan = []
    dataPengaduan = []
    for (var i = 0; i < line.length; i++) {
        bulan.push(month[line[i].bulan])
        dataPengaduan.push(line[i].jumlah)
    }

    // console.log(dataPengaduan)

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: bulan[0],
            Pengaduan: dataPengaduan[0],
        }, {
            period: bulan[1],
            Pengaduan: dataPengaduan[1],
        },
        {
            period: bulan[2],
            Pengaduan: dataPengaduan[2],
        },
        {
            period: bulan[3],
            Pengaduan: dataPengaduan[3],
        },{
            period: bulan[4],
            Pengaduan: dataPengaduan[4],
        },{
            period: bulan[5],
            Pengaduan: dataPengaduan[5],
        },{
            period: bulan[6],
            Pengaduan: dataPengaduan[6],
        },{
            period: bulan[7],
            Pengaduan: dataPengaduan[7],
        },{
            period: bulan[8],
            Pengaduan: dataPengaduan[8],
        }, {
            period: bulan[9],
            Pengaduan: dataPengaduan[9],
        }, {
            period: bulan[10],
            Pengaduan: dataPengaduan[10],
        },{
            period: bulan[11],
            Pengaduan: dataPengaduan[11],
        },
        ],
        xkey: 'period',
        parseTime: false,
        ykeys: ['Pengaduan'],
        labels: ['Pengaduan'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#5f76e8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#5f76e8'],
        resize: true
        
    });

      }

      
    });
      //         Morris.Donut({
    //     element: 'morris-donut-chart',
    //     data: [{
    //         label: "Belum Diproses",
    //         value: belum,

    //     }, {
    //         label: "Sedang Diproses",
    //         value: sedang
    //     }, {
    //         label: "Selesai Diproses",
    //         value: selesai
    //     }],
    //     resize: true,
    //     colors:['#ff4f70', '#fbd46d', '#22ca80']
    // });

    
 });
