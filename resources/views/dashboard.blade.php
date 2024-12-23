<style>
    /* Styling for the top purple section */
    .purple-bg {
        background-color: white;
        padding: 40px;
        color: #6a0dad;
        border-radius: 0 0 30px 30px;
        text-align: center;
    }

    .purple-bg h1 {
        margin: 0;
        font-size: 2.5rem;
        font-weight: bold;
    }

    /* Card styling */
    .stat-card {
        border-radius: 15px;
        background-color: #ffffff;
        margin: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    }

    .stat-card .card-header {
        background-color: wheat;
        color: #6a0dad;
        font-size: 1.5rem;
        font-weight: bold;
        padding: 10px;
        border-radius: 10px 10px 0 0;
    }

    .stat-card .card-title {
        font-size: 2.5rem;
        color: #6a0dad;
        margin: 15px 0 0;
        font-weight: bold;
    }

    /* Container and layout styling */
    .container-fluid {
        margin: 0 auto;
        max-width: 1200px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px 0;
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
<main>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- Purple Section with Statistics -->
            <div class="purple-bg">
                <h1>Dashboard Metrics</h1>
            </div>

            <!-- Statistic Cards Section -->
            <div class="row">
                @foreach ($data['counts'] as $item)
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="stat-card">
                            <div class="card-header">{{ $item['name'] }}</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['count'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
