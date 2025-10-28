<?php
include 'includes/header.php';
$projectsCompleted = $companyStats['projectsCompleted'];
$workers = $companyStats['workers'];
$experienceYears = $companyStats['experienceYears'];
$satisfiedClients = $companyStats['satisfiedClients'];
// echo $projectsCompleted.' '.$workers.' '.$experienceYears.' '.$satisfiedClients; exit;

?>
<title><?php echo 'Our Management Structure | ' . $rows['sitetitle']; ?> </title>
<style>
    /* scroll */
    .scroll {
        max-height: 600px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    * {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    /* Skewed Section */
    .skewed-section {
        position: relative;
        background: url('assets/img/1024px-Road_construction_in_progress.jpeg') no-repeat center center/cover;

        height: auto;
        margin: auto;
        justify-content: center;
        text-align: center;
        overflow: hidden;
    }

    /* Overlay */
    .skewed-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 54, 0, 0.9);
        /* adjust opacity */
        z-index: 1;
    }

    /* Content inside section */
    .skewed-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #fff;
        margin: auto;
        justify-content: center;
        padding: 10em 0
    }

    .skewed-content h1 {
        font-size: 6em;
        margin: auto;
        justify-content: center;
        color: #fff;
        text-transform: uppercase;
        line-height: 1em;
        /* margin-bottom: 10px; */
    }

    .skewed-content p {
        margin: auto;
        font-size: 16px;
        line-height: inherit;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .skewed-section {

            height: auto;
        }

        .skewed-content h1 {
            font-size: 5.8rem;
        }

        .skewed-content p {
            font-size: 1.3rem;
            text-align: left !important;
        }


    }

    .structure-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        padding: 25px;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .structure-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    /* ORGANOGRAM SECTION */
    .organogram {
        margin-top: 80px;
        text-align: center;
    }

    .organogram h3 {
        color: #008000;
        font-weight: 700;
        margin-bottom: 40px;
    }

    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 40px;
    }

    .org-level {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 60px;
        flex-wrap: wrap;
    }

    .org-box {
        background: #008000;
        border: 2px solid #008000;
        border-radius: 12px;
        padding: 20px 30px;
        font-weight: 600;
        color: #fff;
        position: relative;
        min-width: 200px;
        transition: all 0.3s ease;
    }

    .org-box:hover {
        background: #0c4a0c;
        color: #fff;
        transform: translateY(-3px);
    }

    /* Connecting lines */
    .org-level:before {
        content: "";
        position: absolute;
        top: -20px;
        left: 50%;
        width: 2px;
        height: 20px;
        background: #008000;
        transform: translateX(-50%);
    }

    .org-chart>.org-level:first-child:before {
        display: none;
    }

    /* Lines between boxes horizontally */
    .org-level .org-box::before,
    .org-level .org-box::after {
        content: '';
        position: absolute;
        top: -20px;
        width: 2px;
        height: 20px;
        background: #008000;
        left: 50%;
        transform: translateX(-50%);
    }

    .org-level .org-box:first-child::before {
        left: 50%;
        transform: translateX(-50%);
    }

    @media (max-width: 768px) {
        .org-box {
            min-width: 160px;
            padding: 15px;
            font-size: 14px;
        }

        .org-level {
            gap: 30px;
        }
    }
</style>

<body
    class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <?php

                include 'includes/top-bar.php';
                ?>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <?php
                            include 'includes/site-logo.php';
                            ?>
                            <!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div>
                            <!-- /.mobile-button -->

                            <?php
                            include 'includes/navbar.php';
                            ?>
                            <!-- /#main-nav -->
                        </div><!-- /.wrap-inner -->
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->


            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <section class="skewed-section">
                                    <div class="skewed-content m-auto">
                                        <h1>Our Management Structure</h1>
                                    </div>

                                </section>
                                <!-- END ABOUT -->
                                <div class="scroll">
                                    <div
                                        class="zenith-spacer clearfix"
                                        data-desktop="64"
                                        data-mobile="60"
                                        data-smobile="60">
                                    </div>

                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-xl-6 m-auto col-sm-12 p-5">
                                            <h2 class="heading text-center" style="color: #0c4a0c;">Our leaders foster innovation and excellence with a wealth of business and engineering expertise.</h2>
                                            <div class="in-font-size">

                                                <p>
                                                    At Zenith Construction Limited, our management framework is designed to ensure
                                                    clarity, accountability, and seamless collaboration across all departments.
                                                    The structure supports effective decision-making and efficient project execution.
                                                </p>

                                                <p>
                                                    Our corporate management is in charge of directing business operations and carrying out strategic
                                                    initiatives in accordance with the goals established by our prestigious Board of Directors.
                                                    Our corporate management team is committed to promoting quality and innovation and is made up of
                                                    seasoned professionals with broad domain knowledge and expertise spanning our firm and the industry.
                                                    They exemplify the high-performance culture of our company and are dedicated to maintaining our
                                                    corporate principles while spearheading the accomplishment of our business goals.
                                                </p>
                                            </div>
                                            <!-- /.zenith-content-box -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                    </div>

                                    <div
                                        class="zenith-spacer clearfix"
                                        data-desktop="64"
                                        data-mobile="60"
                                        data-smobile="60">
                                    </div>
                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-sm-12 p-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Executive Management</h4>
                                                        <p>
                                                            The Executive Management oversees the overall direction and strategic goals of the company.
                                                            They ensure that Zenith Construction Limited remains aligned with its mission, values, and
                                                            growth objectives. This level provides leadership and approves major operational and financial decisions.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Project Management</h4>
                                                        <p>
                                                            This division coordinates planning, execution, and delivery of all construction projects.
                                                            It liaises with clients, consultants, and internal teams to ensure each project meets
                                                            specified timelines, budgets, and quality standards.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Technical & Engineering Department</h4>
                                                        <p>
                                                            Responsible for all engineering designs, site supervision, and quality control processes.
                                                            This department ensures that every project is executed to technical specifications and
                                                            adheres to industry standards and regulatory requirements.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Procurement & Store</h4>
                                                        <p>
                                                            This unit manages material sourcing, vendor relations, and supply chain coordination.
                                                            Their goal is to ensure timely availability of quality materials and equipment for all project sites.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Finance</h4>
                                                        <p>
                                                            The finance team manages company finances, budgeting, and payroll
                                                            operations. They maintain strong internal controls and ensure
                                                            compliance with financial regulations and corporate policies.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Public Relations & Human Resources</h4>
                                                        <p>
                                                            This department handles talent acquisition, staff welfare, training, and compliance with
                                                            labor regulations. It also manages corporate communications, ensuring a unified company culture
                                                            and effective stakeholder engagement.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Health, Safety & Environment (HSE)</h4>
                                                        <p>
                                                            The HSE unit promotes workplace safety, environmental protection, and regulatory compliance
                                                            across all projects. Their focus is to maintain a safe and sustainable work environment for
                                                            employees, clients, and communities.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="structure-card">
                                                        <h4>Quality Assurance & Control</h4>
                                                        <p>
                                                            This team ensures that all construction processes meet internal quality benchmarks
                                                            and external standards. They implement inspection systems and continuous improvement
                                                            procedures to guarantee client satisfaction.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.zenith-content-box -->
                                            <div
                                                class="zenith-spacer clearfix"
                                                data-desktop="75"
                                                data-mobile="60"
                                                data-smobile="60"></div>
                                        </div>
                                        <!-- /.col-md-6 -->
                                    </div>
                                    <!-- ORGANOGRAM SECTION -->
                                    <div class="organogram">
                                        <h3>Visual Representation of Management Structure</h3>
                                        <div class="org-chart">

                                            <!-- Top Level -->
                                            <div class="org-level">
                                                <div class="org-box">Executive Management</div>
                                            </div>

                                            <!-- Second Level -->
                                            <div class="org-level">
                                                <div class="org-box">Project Management </div>
                                                <div class="org-box">Technical & Engineering Department</div>
                                                <div class="org-box">Finance</div>
                                            </div>

                                            <!-- Third Level -->
                                            <div class="org-level">
                                                <div class="org-box">Procurement & Store</div>
                                                <div class="org-box">Public Relations & Human Resources</div>
                                                <div class="org-box">Health, Safety & Environment (HSE)</div>
                                                <div class="org-box">Quality Assurance & Control</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                    class="zenith-spacer clearfix"
                                    data-desktop="75"
                                    data-mobile="60"
                                    data-smobile="60"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="widget widget_help align-center has-shadow no-sep has-border border-solid">
                            <div class="inner">
                                <h2 class="widget-title margin-bottom-14">

                                    <div
                                        class="zenith-spacer clearfix"
                                        data-desktop="55"
                                        data-mobile="60"
                                        data-smobile="60"></div>
                                    <span>
                                        Your Infrastructure Vision, Our Construction Expertise.
                                    </span>

                                </h2>
                                <p class="text line-height-26 margin-bottom-23">
                                    Start Your Infrastructure Project With Confidence.
                                    Let’s design a lasting solution together.
                                </p>
                                <h2 class="widget-title margin-bottom-14">

                                    <span>
                                        We Build the Roads That Move the Nation
                                    </span>

                                </h2>


                                <div class="elm-button">
                                    <a href="contact-us?p=contactus" class="zenith-button bg-accent pd30">GET IN TOUCH</a>
                                </div>
                            </div>
                            <div
                                class="zenith-spacer clearfix"
                                data-desktop="75"
                                data-mobile="60"
                                data-smobile="60"></div>
                        </div>
                    </div>

                </div>


                <!-- END CLIENTS -->
            </div><!-- /.page-content -->
        </div><!-- /#inner-content -->
    </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->

    <!-- Footer -->
    <?php
    include 'includes/footer.php';
    include 'includes/footscript.php'; ?>
</body>

</html>