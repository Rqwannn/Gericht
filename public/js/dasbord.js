var options = {
    series: [{
    name: 'Spending',
    type: 'column',
    data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6, 4.8, 5.1, 5.5, 5.0]
  }, {
    name: 'Cashflow',
    type: 'column',
    data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 7.5, 7.5, 7.7, 8.1, 8.0]
  }, {
    name: 'Revenue',
    type: 'line',
    data: [20, 29, 37, 36, 44, 45, 50, 58, 63, 67, 75, 81]
  }],
    chart: {
    height: 350,
    type: 'line',
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [1, 1, 4]
  },
  title: {
    text: 'Overall Advantage ( 2020 - Now )',
    align: 'left',
    style:{
        color: '#fff'
    },
    offsetX: 40
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
  },
  yaxis: [
    {
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: true,
        color: '#008FFB'
      },
      labels: {
        style: {
          colors: '#008FFB',
        }
      },
      title: {
        text: "Spending (thousand crores)",
        style: {
          color: '#008FFB',
        }
      },
      tooltip: {
        enabled: true
      }
    },
    {
      seriesName: 'Spending',
      opposite: true,
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: true,
        color: '#00E396'
      },
      labels: {
        style: {
          colors: '#00E396',
        }
      },
      title: {
        text: "Operating Cashflow (thousand crores)",
        style: {
          color: '#00E396',
        }
      },
    },
    {
      seriesName: 'Revenue',
      opposite: true,
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: true,
        color: '#FEB019'
      },
      labels: {
        style: {
          colors: '#FEB019',
        },
      },
      title: {
        text: "Revenue (thousand crores)",
        style: {
          color: '#FEB019',
        }
      }
    },
  ],
  tooltip: {
    fixed: {
      enabled: true,
      position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
      offsetY: 30,
      offsetX: 60
    },
  },
  legend: {
    horizontalAlign: 'left',
    offsetX: 40,
    labels: {
        colors: '#fff'
    },
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart-1"), options);
  chart.render();

  

  var options = {
    series: [{
    name: 'User',
    data: [27, 44, 55, 57, 56, 61, 58, 63, 60, 66, 67]
  }, {
    name: 'Order',
    data: [61, 76, 85, 101, 98, 87, 105, 91, 114, 94, 100]
  }, {
    name: 'Subscribe',
    data: [12, 35, 41, 36, 26, 45, 48, 52, 53, 41, 43]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '75%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
  },
  yaxis: {
    title: {
      text: 'Total'
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "Total " + val + " People"
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart-2"), options);
  chart.render();

  $.ajax({
    url : 'http://127.0.0.1:8000/Api/setRevenue.php',
    type: 'POST',
    dataType: 'JSON',
    error : function(){
      alert("Opps");
    },
    success : function(result){
      let getJSON = result.Revenue;
      let getPersen = result.Persen;
      const setWrapper = document.querySelector(".totalRevenue");
      const PersenRevenue = document.querySelector(".PersenRevenue");

      setWrapper.innerHTML = getJSON;
      PersenRevenue.innerHTML = getPersen;
    }
  })

  $.ajax({
    url : 'http://127.0.0.1:8000/setData',
    type: 'GET',
    dataType: 'JSON',
    error : function(){
      alert("Opps");
    },
    success : function(result){
      // Temtep Total Data
      const TotalOrder = document.querySelector('.TotalOrder');
      const TotalUser = document.querySelector(".TotalUser");
      const TotalSubscribe = document.querySelector('.TotalSubscribe');

      // Tempat Persen Data
      const PersenPesanan = document.querySelector('.PersenPesanan');
      const PersenUser = document.querySelector('.PersenUser');
      const PersenSubscribe = document.querySelector('.PersenSubscribe');

      TotalOrder.innerHTML = result.TotalOrder;
      TotalUser.innerHTML = result.TotalUser;
      TotalSubscribe.innerHTML = result.TotalSubscribe;
      
      PersenPesanan.innerHTML = result.PersenOrder;
      PersenUser.innerHTML = result.PersenUser;
      PersenSubscribe.innerHTML = result.PersenSubscribe;
    }
})