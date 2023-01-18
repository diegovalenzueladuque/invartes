@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">HOME</h1>
</div><br>


<div class="container text-center">
    <div class="row">
        <div class="col col-4 shadow">
            <h2>Gráfico Circular</h2>
            <canvas id="myChart"></canvas>
        </div>
        <div class="col col-2">
            
            
        </div>
        <div class="col col-6 shadow">
            <h2>Gráfico de Barras</h2>
            <canvas id="myChart2"></canvas>
        </div>
        

    </div>
    
</div><br><br>
<div class="container text-center">
    <div class="row">
        <div class="col col-2"></div>
        <div class="col col-9 shadow">
            <h2>Gráfico Lineal</h2>
            <canvas id="myChart3"></canvas>
        </div>
        
        

    </div>
    
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>


  
  <script>
    const cty = document.getElementById('myChart2');
  
    new Chart(cty, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
          
        }]
      },
      options: {
        indexAxis: 'y',
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

<script>
    const ctz = document.getElementById('myChart3');
  
    new Chart(ctz, {
      type: 'line',
      data: {
        labels: ['Black', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

@stop