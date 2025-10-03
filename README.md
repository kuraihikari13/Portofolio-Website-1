<h1 align="center" style="font-size:32px;">🍵 Momo Tea Franchise & Operations Platform</h1>
<p align="center" style="font-size:15px;">
A <b>custom full-stack web application</b> built as the digital backbone for the Momo Tea franchise. 
It powers both the <b>public-facing marketing portal</b> to attract investors and franchisees, and a secure <b>Operations Management System (OMS)</b> for daily franchise operations. 
This system was developed end-to-end for the client and is actively used in production.
</p>

<hr/>

<h2>✨ Key Features — Detailed (Frontend / Backend)</h2>

<!-- 1 -->
<h3>1. Marketing & Investor Portal</h3>
<div style="margin-left:8px;">
  <h4>Frontend</h4>
  <ul>
    <li>🌟 <b>Investor Pitch Deck Integration</b> – Dedicated pages showcasing growth data, financial highlights, and promotional assets in a clean, responsive layout built with HTML/CSS/JS.</li>
    <li>🏢 <b>Franchise Recruitment Section</b> – Explains investment requirements, expected ROI, and benefits. Clear call-to-action flows for applying as a franchisee.</li>
    <li>🎨 <b>Brand Integrity & Visual Identity</b> – Modern UI with carefully structured components reinforcing the professional image of the Momo Tea brand.</li>
    <li>📱 <b>Responsive Design</b> – Mobile-first layout optimized for potential investors browsing on phones or tablets.</li>
  </ul>

  <h4>Backend</h4>
  <ul>
    <li>CMS-driven content for marketing pages, allowing administrators to update pitch materials, franchise requirements, or FAQs without code changes.</li>
    <li>Endpoints serve JSON data for dynamic sections like franchise FAQ, cost breakdown tables, and promotional charts.</li>
    <li>Form submissions for franchise inquiries are securely stored in the database and emailed to HQ for follow-up.</li>
  </ul>
</div>

<hr/>

<!-- 2 -->
<h3>2. Real-Time Income & Sales Tracking</h3>
<div style="margin-left:8px;">
  <h4>Frontend</h4>
  <ul>
    <li>💵 <b>Centralized Dashboard</b> – Franchise owners and HQ can view daily/weekly/monthly sales at-a-glance. KPIs (sales volume, revenue, growth %) are displayed in responsive charts and tables.</li>
    <li>📊 <b>Location-based Filtering</b> – Dropdown filters allow selection of individual vendor outlets or aggregated data across the entire network.</li>
    <li>📱 Mobile-friendly layout for managers on-the-go to monitor sales performance.</li>
  </ul>

  <h4>Backend</h4>
  <ul>
    <li>Transaction data is written to MySQL in real time by each store’s POS system integration or manual entry forms.</li>
    <li>APIs: 
      <pre><code>
GET /api/sales?location={id}&period=monthly
GET /api/kpis?location={id}&from=...&to=...
      </code></pre>
    </li>
    <li>Automated rollups generate daily summaries and cache KPI data for fast load times on dashboards.</li>
    <li>Access control: store managers see only their location’s data, while HQ can view all branches.</li>
  </ul>
</div>

<hr/>

<!-- 3 -->
<h3>3. Stock & Inventory Control</h3>
<div style="margin-left:8px;">
  <h4>Frontend</h4>
  <ul>
    <li>📦 <b>Ingredient Tracking</b> – Each vendor location tracks raw materials (tea leaves, pearls, syrups, milk, cups) with a simple inventory UI.</li>
    <li>🔔 <b>Low Stock Alerts</b> – Real-time warnings appear on dashboards when stock reaches par levels.</li>
    <li>📝 <b>Reports & Exports</b> – Downloadable CSV/Excel for stock usage to aid procurement planning.</li>
  </ul>

  <h4>Backend</h4>
  <ul>
    <li>Inventory schema (simplified):
      <pre><code>
items (id, name, unit, par_level, cost_per_unit)
inventory (id, item_id, location_id, current_stock, last_updated)
stock_logs (id, item_id, location_id, qty_change, reason, created_at)
      </code></pre>
    </li>
    <li>Automatic calculations for consumption rates per store based on sales (e.g., each cup sold deducts certain grams of tea leaves).</li>
    <li>Audit trails for all stock changes ensure accountability.</li>
    <li>Alerts are triggered by backend jobs when <code>current_stock &lt; par_level</code> and notifications are sent to store managers + HQ.</li>
  </ul>
</div>

<hr/>

<!-- 4 -->
<h3>4. Staff & Absence Management</h3>
<div style="margin-left:8px;">
  <h4>Frontend</h4>
  <ul>
    <li>👥 <b>Employee Records</b> – Staff list with profiles, job roles, and assigned shifts accessible from the dashboard.</li>
    <li>📅 <b>Attendance Tracking</b> – Staff logins and absence requests integrated into the portal. Easy-to-read calendars visualize coverage.</li>
    <li>📄 <b>Payroll Support</b> – Export-ready timesheets and absence logs for salary calculations.</li>
  </ul>

  <h4>Backend</h4>
  <ul>
    <li>Data models:
      <pre><code>
staff (id, name, role, location_id, hire_date, status)
attendance (id, staff_id, date, shift, status, note)
absences (id, staff_id, from_date, to_date, reason, approved_by)
      </code></pre>
    </li>
    <li>Shift scheduler: staff assignments and absences are cross-checked to highlight understaffed periods.</li>
    <li>APIs for payroll export return total hours worked, absences, and overtime for a given time range.</li>
    <li>Permission rules: managers can approve absences at store level, HQ can override and see cross-location data.</li>
  </ul>
</div>

<hr/>

<!-- 5 -->
<h3>5. Operations Management System (OMS)</h3>
<div style="margin-left:8px;">
  <h4>Frontend</h4>
  <ul>
    <li>⚙️ <b>Unified Dashboard</b> – Combines sales, inventory, and HR metrics into one view for franchise HQ.</li>
    <li>📈 <b>Performance Comparison</b> – Compare multiple branches on revenue, stock efficiency, and labor productivity.</li>
    <li>🔐 <b>Role-Specific Access</b> – Managers see local store data; HQ executives see aggregated views.</li>
  </ul>

  <h4>Backend</h4>
  <ul>
    <li>Data warehouse layer inside MySQL that aggregates reports across locations nightly, plus on-demand recalculations for real-time views.</li>
    <li>Audit & logging: all critical actions (inventory adjustments, payroll changes, KPI exports) are logged for compliance and accountability.</li>
    <li>Notification system to alert HQ if anomalies are detected (e.g., sudden sales drop, stock variance outside expected levels).</li>
  </ul>
</div>

<hr/>

<h2>🛠️ Technology Stack</h2>
<table>
  <tr>
    <td><b>Frontend</b></td>
    <td>HTML, CSS, JavaScript</td>
  </tr>
  <tr>
    <td><b>Backend</b></td>
    <td>Laravel (PHP Framework)</td>
  </tr>
  <tr>
    <td><b>Database</b></td>
    <td>MySQL</td>
  </tr>
</table>

<p><i>📌 Note: The technology stack (Laravel, MySQL, and standard web frontend) was chosen to match the client’s existing infrastructure and developer familiarity. 
This ensured smooth deployment on their hosting environment, easier long-term maintenance, and scalability as new franchise outlets are onboarded.</i></p>

<hr/>

<h2>✅ Project Outcome</h2>
<p>
The final system delivers a <b>professional, reliable, and scalable solution</b> for both brand promotion and daily franchise management. 
It gives investors transparency, provides franchisees with efficient operational tools, and ensures HQ maintains full oversight of the growing network of Momo Tea outlets.
</p>
