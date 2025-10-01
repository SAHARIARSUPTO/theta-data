<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options Data Access Tiers</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* --- Redesign Colors & Global Styles --- */
        :root {
            --td-dark-bg: #111827; /* Very Dark Background */
            --td-card-bg: #1f2937; /* Slightly Lighter Card Background */
            --td-primary: #3b82f6; /* Blue Accent */
            --td-green: #10b981; /* Green for GET (REST) */
            --td-orange: #f59e0b; /* Orange for STR (Stream) */
        }

        body {
            background-color: var(--td-dark-bg);
            font-family: 'Inter', sans-serif;
            color: #f3f4f6;
            padding: 4rem 0;
        }

        /* Section Header */
        .section-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        .section-header p {
            color: #9ca3af;
            font-size: 1.1rem;
        }
        .section-header a {
            color: var(--td-primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .section-header a:hover {
            color: #60a5fa;
        }

        /* Pricing Card Styling */
        .plan-card {
            background-color: var(--td-card-bg);
            border-radius: 1rem;
            padding: 2.5rem 1.5rem;
            height: 100%; /* Important for equal height columns */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .plan-card:hover {
            transform: translateY(-5px); /* Subtle lift on hover */
        }

        .plan-card h3 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        /* Highlight the current or recommended tier */
        .plan-card.highlight {
            border: 3px solid var(--td-primary);
            background-color: #263245; /* Slightly different background for highlight */
        }
        .plan-card.highlight h3 {
            color: var(--td-primary);
        }

        /* Feature List Styling */
        .feature-list {
            padding: 0;
            list-style: none;
            margin-top: 1.5rem;
            min-height: 350px; /* Ensures all cards have similar minimum height */
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }

        /* Feature Tags (GET/STR) */
        .feature-tag {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.2rem 0.5rem;
            border-radius: 0.3rem;
            margin-right: 0.75rem;
            width: 45px; /* Fixed width for alignment */
            text-align: center;
            line-height: 1;
        }

        .tag-get {
            background-color: var(--td-green);
            color: var(--td-dark-bg);
        }
        .tag-str {
            background-color: var(--td-orange);
            color: var(--td-dark-bg);
        }
        .tag-inherit {
            color: #9ca3af;
            font-size: 0.8rem;
            margin-left: auto;
        }

        /* Button Styling */
        .btn-primary {
            background-color: var(--td-primary);
            border-color: var(--td-primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            width: 100%;
            margin-top: 1rem;
        }
        .btn-primary:hover {
            background-color: #2563eb;
            border-color: #2563eb;
        }
    </style>
</head>
<body>

<section class="container text-center">
    <div class="section-header mb-5">
        <h1>Options Data API Tiers</h1>
        <p>Access **All Exchanges**, Complex Greeks, and **Low Latency** streams tailored to your strategy.</p>
        <p class="mt-3">
            <a href="#">Learn More about Greeks</a> &middot;
            <a href="#">View Documentation</a>
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col">
            <div class="plan-card">
                <h3 class="text-white">Free</h3>
                <p class="text-muted small">Fundamental API Access</p>
                <div class="feature-list text-start">
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>End of Day</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>List All Tickers</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>List All Expirations</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>List All Strikes</div>
                </div>
                <a href="#" class="btn btn-outline-light mt-auto">Sign Up</a>
            </div>
        </div>

        <div class="col">
            <div class="plan-card">
                <h3 class="text-white">Value</h3>
                <p class="text-muted small">Intraday Snapshots & Open Interest</p>
                <div class="feature-list text-start">
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Quote <span class="tag-inherit"> (Inc. Free)</span></div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Open Interest</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Quote Snapshot</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Open Interest Snapshot</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>OHLC Snapshot</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Quote At Time</div>
                </div>
                <a href="#" class="btn btn-primary mt-auto">Choose Value</a>
            </div>
        </div>

        <div class="col">
            <div class="plan-card highlight">
                <h3>Standard</h3>
                <p class="text-white small fw-bold">Real-time Data Streams (Includes Value)</p>
                <div class="feature-list text-start">
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade <span class="tag-inherit"> (Inc. Value)</span></div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade Quote</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Greeks</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Implied Volatility</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade Snapshot</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade At Time</div>
                    <div class="feature-item"><span class="feature-tag tag-str">STR</span>Quote Stream</div>
                    <div class="feature-item"><span class="feature-tag tag-str">STR</span>Trade Stream</div>
                </div>
                <a href="#" class="btn btn-primary mt-auto">Start Standard</a>
            </div>
        </div>

        <div class="col">
            <div class="plan-card">
                <h3 class="text-white">Pro</h3>
                <p class="text-muted small">Full Low-Latency & Advanced Analytics</p>
                <div class="feature-list text-start">
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Second Order Greeks <span class="tag-inherit"> (Inc. Standard)</span></div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Third Order Greeks</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade Greeks</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade Greeks and Order</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>Trade Greeks 3rd Order</div>
                    <div class="feature-item"><span class="feature-tag tag-get">GET</span>All Greeks</div>
                    <div class="feature-item"><span class="feature-tag tag-str">STR</span>Full Trade Stream</div>
                </div>
                <a href="#" class="btn btn-primary mt-auto">Go Pro</a>
            </div>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>