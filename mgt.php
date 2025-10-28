<!doctype html>
<html lang="en" class="no-js">
<head>
  <?php include 'includes/topassets.php'; ?>
  <title>Zenith Construction Limited | Management Structure</title>
  <style>
    .management-section {
      padding: 60px 0;
    }
    .management-section h2 {
      font-weight: 700;
      margin-bottom: 20px;
      color: #003366;
    }
    .management-section p {
      line-height: 1.8;
      color: #333;
    }
    .structure-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      padding: 25px;
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    .structure-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    /* ORGANOGRAM SECTION */
    .organogram {
      margin-top: 80px;
      text-align: center;
    }
    .organogram h3 {
      color: #003366;
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
      background: #f8f9fa;
      border: 2px solid #003366;
      border-radius: 12px;
      padding: 20px 30px;
      font-weight: 600;
      color: #003366;
      position: relative;
      min-width: 200px;
      transition: all 0.3s ease;
    }
    .org-box:hover {
      background: #003366;
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
      background: #003366;
      transform: translateX(-50%);
    }
    .org-chart > .org-level:first-child:before {
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
      background: #003366;
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
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <div class="ts-main-content">
    <?php include 'includes/leftbar.php'; ?>
    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="management-section">
          <div class="text-center mb-5">
            <h2>Our Management Structure</h2>
            <p class="lead">
              At Zenith Construction Limited, our management framework is built on a clear, 
              collaborative, and efficient chain of command that ensures quality delivery, 
              accountability, and strategic decision-making across all departments.
            </p>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="structure-card">
                <h4>Executive Management</h4>
                <p>
                  Oversees strategic direction and governance of the company, ensuring all operations align 
                  with Zenith’s mission, values, and long-term objectives.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Project Management Division</h4>
                <p>
                  Coordinates project planning, execution, and delivery. Interfaces between clients, 
                  consultants, and the technical team to ensure smooth project workflows.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Technical & Engineering Department</h4>
                <p>
                  Provides design, supervision, and technical oversight on all construction activities, 
                  ensuring compliance with engineering and safety standards.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Procurement & Logistics Unit</h4>
                <p>
                  Manages sourcing, vendor relations, and supply chain processes to ensure timely delivery 
                  of materials and equipment to project sites.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Finance & Administration</h4>
                <p>
                  Oversees company finances, budgeting, payroll, and administrative procedures to 
                  ensure transparency, accountability, and compliance.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Human Resources & Corporate Services</h4>
                <p>
                  Handles staff recruitment, training, welfare, and corporate communications, 
                  fostering a culture of professionalism and performance.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Health, Safety & Environment (HSE)</h4>
                <p>
                  Ensures safe working environments and environmental sustainability 
                  across all operations through proactive safety management.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="structure-card">
                <h4>Quality Assurance & Control</h4>
                <p>
                  Implements and monitors quality control systems to guarantee that 
                  all projects meet internal and external performance standards.
                </p>
              </div>
            </div>
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
                <div class="org-box">Project Management Division</div>
                <div class="org-box">Technical & Engineering Department</div>
                <div class="org-box">Finance & Administration</div>
              </div>

              <!-- Third Level -->
              <div class="org-level">
                <div class="org-box">Procurement & Logistics</div>
                <div class="org-box">Human Resources & Corporate Services</div>
                <div class="org-box">Health, Safety & Environment (HSE)</div>
                <div class="org-box">Quality Assurance & Control</div>
              </div>
            </div>
          </div>
        </div>

        <?php include 'includes/copyright.php'; ?>
      </div>
    </div>
  </div>

  <?php include 'includes/footscripts.php'; ?>
</body>
</html>
