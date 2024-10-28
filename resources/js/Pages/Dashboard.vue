<template>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <SideBar />
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-xxl-6 mb-6 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-start row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary mb-3">Welcome Admin 🎉</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-6">
                                                <img src="../../assets/img/illustrations/man-with-laptop.png"
                                                    height="175" class="scaleX-n1-rtl" alt="View Badge User">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 col-6 mb-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/chart-success.png"
                                                    alt="chart success" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-1">Total Stock</p>
                                        <h4 class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                            {{ totalStock }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 col-6 mb-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/wallet-info.png"
                                                    alt="wallet info" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-1">Total Sales</p>
                                        <h4 class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                            {{ totalSales }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-8 col-lg-12 col-xxl-4 order-1 order-md-2">
                                <div class="row">
                                    <div class="col-6 mb-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between mb-4">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../../assets/img/icons/unicons/cc-primary.png"
                                                            alt="Credit Card" class="rounded">
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt1"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded text-muted"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                More</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-1">Total Purchase</p>
                                                <h4 class="card-title mb-3">$14,857</h4>
                                                <h4 class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                                    {{ totalPurchases }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class="my-12">
                        <div class="card">
                            <h5 class="card-header">Transaction History</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Transaction Type</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr v-for="transaction in transactions" :key="transaction.id">
                                            <td>{{ transaction.product.name }}</td>
                                            <td>{{ transaction.type }}</td>
                                            <td>{{ transaction.quantity }}</td>
                                            <td>${{ transaction.amount.toFixed(2) }}</td>
                                            <td>{{ new Date(transaction.created_at).toLocaleDateString() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 order-1 mt-4 mb-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <ApexChart type="line" :options="chartOptions" :series="chartData" height="320" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import SideBar from '@/Components/SideBar.vue';
import ApexChart from 'vue3-apexcharts';



export default {
    components: {
        SideBar,
        ApexChart,
    },
    props: {
        totalStock: Number,
        totalSales: Number,
        totalPurchases: Number,
        transactions: Array,
        stockTrends: Object,
    },
    data() {
        return {
            chartOptions: {
                chart: {
                    type: 'line',
                    height: 350,
                },
                xaxis: {
                    type: 'datetime',
                },
            },
            chartData: [
                {
                    name: 'Stock Trends',
                    data: this.formatChartData(this.stockTrends, 'open_stock'),
                },
                {
                    name: 'Purchases',
                    data: this.formatChartData(this.stockTrends, 'purchase'),
                },
                {
                    name: 'Sales',
                    data: this.formatChartData(this.stockTrends, 'sell'),
                },
            ],
        };
    },
    methods: {
        formatChartData(stockTrends, type) {
            return Object.entries(stockTrends).map(([date, types]) => ({
                x: new Date(date).getTime(),
                y: types[type] || 0,
            }));
        },
    },
};
</script>

<style scoped>
hr {
    margin: 1rem 0;
    color: #e4e6e8;
    border: 0;
    border-top: var(--bs-border-width) solid;
    opacity: 1;
}
</style>
