@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>HOME</b></h1>
</div><br>


<div class="container-fluid text-center">
    <div class="row">
        <div class="col col-3">
            <h2>Gráfico Circular</h2>
            <canvas id="myChart"></canvas>
        </div>
        <div class="col col-2">
            
            
        </div>
        <div class="col col-6">
            <h2>Gráfico de Barras</h2>
            <canvas id="myChart2"></canvas>
        </div>
        

    </div>
    
</div><br><br>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col col-2"></div>
        <div class="col col-9">
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