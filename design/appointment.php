<?php
$conn=mysqli_connect('localhost','uploadchart','','dental_clinic') or die('Unable to connect database!');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Calendar Appointment</title>
  <style>
    :root {
      --bg: #0f172a;          /* slate-900 */
      --panel: #111827;       /* gray-900 */
      --muted: #334155;       /* slate-600 */
      --text: #e5e7eb;        /* gray-200 */
      --accent: #22c55e;      /* green-500 */
      --accent-2: #38bdf8;    /* sky-400 */
      --danger: #ef4444;      /* red-500 */
      --warning: #f59e0b;     /* amber-500 */
      --ring: #64748b;        /* slate-500 */
    }

    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      margin: 0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Inter, "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji";
      color: var(--text);
      background: radial-gradient(1200px 800px at 20% -10%, #1f2937, #0b1222 60%, #05070d 100%), var(--bg);
      display: grid;
      place-items: center;
      padding: 24px;
    }

    .app {
      width: min(1200px, 95vw);
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 16px;
    }

    .panel {
      background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
      border: 1px solid rgba(148, 163, 184, 0.2);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.35);
      backdrop-filter: blur(6px);
    }

    .calendar {
      padding: 16px;
    }

    .calendar header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      padding: 8px 6px 16px;
    }

    .title {
      font-weight: 700;
      font-size: 20px;
      letter-spacing: 0.3px;
    }

    .nav {
      display: flex;
      gap: 8px;
    }

    button.icon {
      appearance: none;
      border: 1px solid rgba(148, 163, 184, 0.25);
      background: #0b1222;
      color: var(--text);
      border-radius: 12px;
      padding: 10px 12px;
      cursor: pointer;
      transition: transform .06s ease, border-color .2s ease, background .2s ease;
    }
    button.icon:hover { border-color: var(--ring); background: #0e162a; }
    button.icon:active { transform: translateY(1px); }

    .grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 6px;
      padding: 8px 0 2px;
    }

    .dow { color: #9ca3af; font-size: 12px; text-transform: uppercase; letter-spacing: .12em; text-align: center; padding: 6px 0; }

    .day {
      aspect-ratio: 1 / 1;
      background: #0b1222;
      border: 1px solid rgba(148, 163, 184, 0.15);
      border-radius: 12px;
      padding: 8px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: border-color .2s ease, background .2s ease, transform .06s ease;
      display: grid;
      grid-template-rows: auto 1fr;
    }
    .day:hover { border-color: var(--ring); background: #0d1426; }
    .day:active { transform: translateY(1px); }

    .day .num { font-weight: 700; color: #cbd5e1; }
    .day.other-month { opacity: .45; }
    .day.today { outline: 2px dashed var(--accent-2); outline-offset: -4px; }

    .chips { display: flex; flex-wrap: wrap; gap: 4px; padding-top: 4px; align-content: start; }
    .chip { font-size: 10px; padding: 2px 6px; border-radius: 999px; border: 1px solid rgba(148,163,184,.25); background: rgba(148,163,184,.08); white-space: nowrap; text-overflow: ellipsis; overflow: hidden; max-width: 100%; }

    .sidebar { padding: 16px; display: grid; grid-template-rows: auto auto 1fr; gap: 12px; }

    .sidebar .section-title { font-weight: 700; font-size: 14px; color: #cbd5e1; }

    .slots { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; }
    .slot {
      border: 1px dashed rgba(148, 163, 184, 0.35);
      background: #0b1222;
      border-radius: 10px;
      padding: 10px;
      font-size: 12px;
      text-align: center;
      cursor: pointer;
      transition: all .15s ease;
      color:#fff;
    }
    .slot:hover { border-color: var(--accent-2); background: #0e162a; }
    .slot.booked { border-color: var(--danger); color: #fecaca; text-decoration: line-through; cursor: not-allowed; opacity: .7; }
    .slot.selected { border-color: var(--accent); box-shadow: 0 0 0 2px rgba(34,197,94,.35) inset; }

    .form {
      display: grid;
      gap: 10px;
    }

    .row { display: grid; gap: 8px; }
    label { font-size: 12px; color: #94a3b8; }
    input, textarea, select {
      width: 100%;
      background: #0b1222;
      color: var(--text);
      border: 1px solid rgba(148, 163, 184, 0.25);
      border-radius: 10px;
      padding: 10px 12px;
      outline: none;
      transition: border-color .2s ease, box-shadow .2s ease;
    }
    input:focus, textarea:focus, select:focus { border-color: var(--accent-2); box-shadow: 0 0 0 3px rgba(56, 189, 248, .2); }
    textarea { min-height: 72px; resize: vertical; }

    .actions { display: flex; gap: 8px; }
    .btn {
      padding: 10px 12px;
      border-radius: 12px;
      border: 1px solid rgba(148, 163, 184, 0.25);
      background: #0b1222;
      color: var(--text);
      cursor: pointer;
      transition: transform .06s ease, background .2s ease, border-color .2s ease;
    }
    .btn:hover { background: #0e162a; border-color: var(--ring); }
    .btn:active { transform: translateY(1px); }
    .btn.primary { background: linear-gradient(180deg, rgba(34,197,94,.25), rgba(34,197,94,.15)); border-color: rgba(34,197,94,.45); }
    .btn.danger { background: linear-gradient(180deg, rgba(239,68,68,.25), rgba(239,68,68,.15)); border-color: rgba(239,68,68,.45); }

    .list { display: grid; gap: 8px; max-height: 320px; overflow: auto; padding-right: 2px; }
    .item { border: 1px solid rgba(148, 163, 184, 0.25); border-radius: 12px; padding: 10px; display: grid; gap: 6px; background: #0b1222; }
    .item h4 { margin: 0; font-size: 14px; }
    .tag { font-size: 11px; padding: 2px 6px; border-radius: 999px; background: rgba(56,189,248,.15); border: 1px solid rgba(56,189,248,.35); display: inline-block; }

    .legend { display: flex; gap: 12px; font-size: 12px; color: #94a3b8; }
    .legend span { display: inline-flex; align-items: center; gap: 6px; }
    .dot { width: 10px; height: 10px; border-radius: 999px; display: inline-block; }
    .dot.free { background: var(--accent); }
    .dot.booked { background: var(--danger); }
    .dot.selected { background: var(--accent-2); }

    @media (max-width: 920px) {
      .app { grid-template-columns: 1fr; }
    }

    dialog::backdrop { background: rgba(2,6,23,.6); }
    dialog { border: 1px solid rgba(148,163,184,.35); border-radius: 16px; background: #0b1222; color: var(--text); padding: 0; overflow: hidden; }
    .modal-header { padding: 12px 16px; border-bottom: 1px solid rgba(148,163,184,.25); display: flex; justify-content: space-between; align-items: center; }
    .modal-body { padding: 16px; }

    /* (same styles as before) */
.edit-btn, .delete-btn {
font-size: 12px;
padding: 2px 6px;
margin-left: 6px;
border: none;
border-radius: 6px;
cursor: pointer;
}
.edit-btn { background: #3b82f6; color: #fff; }
.delete-btn { background: #ef4444; color: #fff; }
  </style>
</head>
<body>
  <div class="app">
    <!-- CALENDAR PANEL -->
    <section class="calendar panel">
      <header>
        <div class="title" id="monthLabel">Month YYYY</div>
        <div class="nav">
          <button class="icon" id="prevBtn" title="Previous Month" aria-label="Previous Month">⟨</button>
          <button class="icon" id="todayBtn" title="Jump to Today" aria-label="Jump to Today">Today</button>
          <button class="icon" id="nextBtn" title="Next Month" aria-label="Next Month">⟩</button>
        </div>
      </header>
      <div class="grid" id="dow">
        <div class="dow">Sun</div>
        <div class="dow">Mon</div>
        <div class="dow">Tue</div>
        <div class="dow">Wed</div>
        <div class="dow">Thu</div>
        <div class="dow">Fri</div>
        <div class="dow">Sat</div>
      </div>
      <div class="grid" id="days"></div>
      <div style="padding: 12px 6px 6px;">
        <div class="legend">
          <span><i class="dot free"></i> Free</span>
          <span><i class="dot booked"></i> Booked</span>
          <span><i class="dot selected"></i> Selected</span>
        </div>
      </div>
    </section>

    <!-- SIDEBAR -->
    <aside class="sidebar panel">
      <div>
        <div class="section-title">Pick a time</div>
        <p id="selectedDateLabel" style="margin:6px 0 10px;color:#9ca3af">Select a day in the calendar.</p>
        <div class="slots" id="slots"></div>
      </div>

      <div>
        <div class="section-title">Your details</div>
        <form id="form" class="form">
          <div class="row">
            <label for="name">Full name</label>
            <input id="name" name="name" placeholder="Juan Dela Cruz" required />
          </div>
          <div class="row">
            <label for="email">Contact No.</label>
            <input id="email" name="email" type="text" placeholder="09xxxxxxxxx" required />
          </div>
          <div class="row">
            <label for="purpose">Procedure</label>
            <select id="purpose" name="purpose">
                <?php
                $query=mysqli_query($conn,"SELECT * FROM services");
                if(mysqli_num_rows($query) > 0){
                    while($row=mysqli_fetch_array($query)){
                        echo "<option value='$row[service_description]'>$row[service_description]</option>";
                    }
                }
                ?>
              <!-- <option value="Consultation">Consultation</option>
              <option value="Follow-up">Follow-up</option>
              <option value="Demo">Product Demo</option>
              <option value="Other">Other</option> -->
            </select>
          </div>
          <div class="row">
            <label for="notes">Notes (optional)</label>
            <textarea id="notes" name="notes" placeholder="Add any details..."></textarea>
          </div>
          <div class="actions">
            <button type="button" class="btn" id="clearSelection">Clear</button>
            <button type="submit" class="btn primary" id="bookBtn">Book Appointment</button>
          </div>
        </form>
      </div>

      <div>
        <!-- <div class="section-title">Your appointments</div> -->
        <!-- <div class="list" id="apptList"></div> -->
      </div>
    </aside>
  </div>

  <!-- VIEW / EDIT MODAL -->
  <dialog id="viewDialog">
    <div class="modal-header">
      <strong id="viewTitle">Appointment</strong>
      <button class="icon" id="closeView">✕</button>
    </div>
    <div class="modal-body">
      <div id="viewBody" style="display:grid; gap:8px; font-size:14px"></div>
      <div class="actions" style="margin-top:12px">
        <button class="btn" id="exportIcsBtn">Export .ics</button>
        <button class="btn danger" id="deleteBtn">Delete</button>
      </div>
    </div>
  </dialog>

  <!-- POPUP FOR BOOKED DAYS -->
<dialog id="bookedDayDialog">
<div class="modal-header">
<strong>Appointments on <span id="bookedDayLabel"></span></strong>
<button class="icon" id="closeBookedDay">✕</button>
</div>
<div class="modal-body">
<div id="bookedDayList" style="display:grid; gap:8px; font-size:14px"></div>
</div>
</dialog>

  <script>
  (function(){
    // --- State & Utilities ---
    const daysEl = document.getElementById('days');
    const monthLabel = document.getElementById('monthLabel');
    const selectedDateLabel = document.getElementById('selectedDateLabel');
    const slotsEl = document.getElementById('slots');
    const apptListEl = document.getElementById('apptList');

    const today = new Date();
    let viewYear = today.getFullYear();
    let viewMonth = today.getMonth(); // 0-11

    // selection
    let selectedDate = null; // string YYYY-MM-DD
    let selectedTime = null; // string HH:MM

    const STORAGE_KEY = 'appointments.v1';

    function pad(n){ return String(n).padStart(2,'0'); }
    function ymd(date){ return `${date.getFullYear()}-${pad(date.getMonth()+1)}-${pad(date.getDate())}`; }
    function toLocalDate(ymdStr){ const [y,m,d]=ymdStr.split('-').map(Number); return new Date(y, m-1, d); }

    function load(){
      try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]'); }
      catch{ return []; }
    }
    function save(list){ localStorage.setItem(STORAGE_KEY, JSON.stringify(list)); }

    function conflictExists(dateStr, timeStr){
      const list = load();
      return list.some(a => a.date === dateStr && a.time === timeStr);
    }

    // Generate time slots (default 9:00 - 17:00 every 30 mins)
    function generateSlots(start="09:00", end="17:00", stepMin=30){
      const [sh, sm] = start.split(':').map(Number);
      const [eh, em] = end.split(':').map(Number);
      const startMin = sh*60+sm, endMin = eh*60+em;
      const out = [];
      for(let t=startMin; t<=endMin; t+=stepMin){
        const h = Math.floor(t/60), m = t%60;
        out.push(`${pad(h)}:${pad(m)}`);
      }
      return out;
    }

    // --- Calendar Rendering ---
    function renderCalendar(){
      const first = new Date(viewYear, viewMonth, 1);
      const last = new Date(viewYear, viewMonth+1, 0);
      const startDay = first.getDay();
      const daysInMonth = last.getDate();

      const prevLast = new Date(viewYear, viewMonth, 0).getDate();

      const monthName = first.toLocaleString(undefined, { month:'long', year:'numeric' });
      monthLabel.textContent = monthName;

      daysEl.innerHTML = '';

      // previous month's tail
      for(let i=startDay-1; i>=0; i--){
        const num = prevLast - i;
        const date = new Date(viewYear, viewMonth-1, num);
        daysEl.appendChild(dayCell(date, true));
      }
      // current month
      for(let d=1; d<=daysInMonth; d++){
        const date = new Date(viewYear, viewMonth, d);
        daysEl.appendChild(dayCell(date, false));
      }
      // next month's head to fill grid (up to 42 cells)
      const cells = daysEl.children.length;
      for(let k=1; k<=42-cells; k++){
        const date = new Date(viewYear, viewMonth+1, k);
        daysEl.appendChild(dayCell(date, true));
      }
    }

    function dayCell(date, otherMonth){
      const d = document.createElement('div');
      d.className = 'day' + (otherMonth?' other-month':'');
      if(ymd(date) === ymd(today)) d.classList.add('today');
      d.dataset.date = ymd(date);
      d.innerHTML = `<div class="num">${date.getDate()}</div><div class="chips"></div>`;

      const chips = d.querySelector('.chips');
      const list = load().filter(a => a.date === ymd(date));
      list.slice(0,2).forEach(a => {
        const s = document.createElement('div'); s.className = 'chip'; s.textContent = `${a.time} · ${a.name}`; chips.appendChild(s);
      });
      if(list.length > 2){ const more = document.createElement('div'); more.className='chip'; more.textContent = `+${list.length-2} more`; chips.appendChild(more); }

      //d.addEventListener('click', () => selectDate(ymd(date)));
      d.addEventListener('click',()=>{
      if(list.length>0){
        selectDate(ymd(date));
      openBookedDayPopup(ymd(date));
      }else{
        selectDate(ymd(date));
      }
});
      return d;
    }

    function selectDate(dateStr){
      selectedDate = dateStr; selectedTime = null;
      const d = toLocalDate(dateStr);
      selectedDateLabel.textContent = d.toLocaleString(undefined, { weekday:'long', month:'long', day:'numeric', year:'numeric' });
      Array.from(document.querySelectorAll('.day')).forEach(el => el.classList.toggle('selected', el.dataset.date === dateStr));
      renderSlots();
    }

    function renderSlots(){
      const slots = generateSlots();
      slotsEl.innerHTML = '';
      slots.forEach(t => {
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'slot';
        b.textContent = t;
        if(!selectedDate){ b.disabled = true; b.title = 'Select a day first'; }
        if(selectedDate && conflictExists(selectedDate, t)){
          b.classList.add('booked');
          b.disabled = true;
        }
        b.addEventListener('click', ()=>{
          if(b.classList.contains('booked')) return;
          document.querySelectorAll('.slot.selected').forEach(x => x.classList.remove('selected'));
          b.classList.add('selected'); selectedTime = t;
        });
        slotsEl.appendChild(b);
      });
    }

    // --- Booking ---
    document.getElementById('form').addEventListener('submit', (e)=>{
      e.preventDefault();
      if(!selectedDate || !selectedTime){
        alert('Please choose a date and a time slot.');
        return;
      }
      const data = Object.fromEntries(new FormData(e.target).entries());
      const appt = {
        id: crypto.randomUUID(),
        date: selectedDate,
        time: selectedTime,
        name: data.name.trim(),
        email: data.email.trim(),
        purpose: data.purpose,
        notes: data.notes?.trim() || ''
      };
      if(conflictExists(appt.date, appt.time)){
        alert('Sorry, that slot is already booked.');
        renderSlots();
        return;
      }
      const list = load(); list.push(appt); save(list);
      e.target.reset();
      renderCalendar(); renderSlots(); renderList();
      openView(appt.id);
    });

    document.getElementById('clearSelection').addEventListener('click', ()=>{
      selectedTime = null;
      document.querySelectorAll('.slot.selected').forEach(x => x.classList.remove('selected'));
    });

    function renderList(){
      const list = load().sort((a,b)=> (a.date+a.time).localeCompare(b.date+b.time));
      apptListEl.innerHTML='';
      if(list.length === 0){
        apptListEl.innerHTML = '<div class="item" style="opacity:.7">No appointments yet.</div>';
        return;
      }
      for(const a of list){
        const item = document.createElement('div');
        item.className = 'item';
        const dt = new Date(`${a.date}T${a.time}`);
        const when = dt.toLocaleString(undefined, { weekday:'short', month:'short', day:'numeric', year:'numeric', hour:'2-digit', minute:'2-digit' });
        item.innerHTML = `
          <h4>${a.name} <span class="tag">${a.purpose}</span></h4>
          <div>${when}</div>
          <div class="actions">
            <button class="btn" data-view="${a.id}">View</button>
            <button class="btn danger" data-del="${a.id}">Delete</button>
            <button class="btn" data-ics="${a.id}">.ics</button>
          </div>
        `;
        item.querySelector('[data-view]').addEventListener('click', ()=> openView(a.id));
        item.querySelector('[data-del]').addEventListener('click', ()=> deleteAppt(a.id));
        item.querySelector('[data-ics]').addEventListener('click', ()=> downloadIcs(a.id));
        apptListEl.appendChild(item);
      }
    }

    function deleteAppt(id){
      if(!confirm('Delete this appointment?')) return;
      const list = load().filter(a => a.id !== id); save(list);
      renderCalendar(); renderSlots(); renderList();
    }

    // --- Modal View ---
    const viewDialog = document.getElementById('viewDialog');
    const viewTitle = document.getElementById('viewTitle');
    const viewBody = document.getElementById('viewBody');
    document.getElementById('closeView').addEventListener('click', ()=> viewDialog.close());
    document.getElementById('deleteBtn').addEventListener('click', ()=>{
      const id = viewDialog.dataset.id; if(!id) return; viewDialog.close(); deleteAppt(id);
    });
    

    function openView(id){
      const a = load().find(x => x.id === id); if(!a) return;
      const dt = new Date(`${a.date}T${a.time}`);
      viewDialog.dataset.id = id;
      viewTitle.textContent = `${a.name}`;
      viewBody.innerHTML = `
        <div><strong>When:</strong> ${dt.toLocaleString(undefined, { weekday:'long', month:'long', day:'numeric', year:'numeric', hour:'2-digit', minute:'2-digit' })}</div>
        <div><strong>Purpose:</strong> ${a.purpose}</div>
        <div><strong>Contact No.:</strong> ${a.email}</div>
        <div><strong>Notes:</strong><br>${a.notes ? escapeHtml(a.notes).replace(/\n/g,'<br>') : '<em>None</em>'}</div>
      `;
      viewDialog.showModal();
    }

    // --- ICS export ---
    function icsFor(a){
      const dtStart = new Date(`${a.date}T${a.time}`);
      const dtEnd = new Date(dtStart.getTime() + 30*60*1000); // default 30 mins
      function toIcsDate(d){
        // YYYYMMDDTHHMMSSZ in UTC
        const z = new Date(d.getTime() - d.getTimezoneOffset()*60000);
        return z.toISOString().replace(/[-:]/g, '').split('.')[0] + 'Z';
      }
      const uid = a.id + '@local.calendar';
      const summary = `${a.purpose} with ${a.name}`;
      const description = a.notes || '';
      return `BEGIN:VCALENDAR\nVERSION:2.0\nPRODID:-//Local Calendar//EN\nBEGIN:VEVENT\nUID:${uid}\nDTSTAMP:${toIcsDate(new Date())}\nDTSTART:${toIcsDate(dtStart)}\nDTEND:${toIcsDate(dtEnd)}\nSUMMARY:${escapeIcs(summary)}\nDESCRIPTION:${escapeIcs(description)}\nEND:VEVENT\nEND:VCALENDAR`;
    }

    function downloadIcs(id){
      const a = load().find(x => x.id === id); if(!a) return;
      const blob = new Blob([icsFor(a)], {type:'text/calendar;charset=utf-8'});
      const url = URL.createObjectURL(blob);
      const link = Object.assign(document.createElement('a'), { href: url, download: `${a.date}_${a.time.replace(':','')}_${a.name.replace(/\s+/g,'_')}.ics` });
      document.body.appendChild(link); link.click(); link.remove(); URL.revokeObjectURL(url);
    }

    document.getElementById('exportIcsBtn').addEventListener('click', ()=>{
      const id = viewDialog.dataset.id; if(id) downloadIcs(id);
    });

    // --- Helpers ---
    function escapeHtml(str){
      return str.replace(/[&<>\"']/g, s => ({'&':'&amp;','<':'&lt;','>':'&gt;','\"':'&quot;',"'":'&#39;'}[s]));
    }
    function escapeIcs(str){
      return String(str).replace(/[\\,;]/g, m=> ({'\\':'\\\\', ',':'\\,',';':'\\;'}[m])).replace(/\n/g,'\\n');
    }

    // --- Nav ---
    document.getElementById('prevBtn').addEventListener('click', ()=>{ if(--viewMonth < 0){ viewMonth=11; viewYear--; } renderCalendar(); });
    document.getElementById('nextBtn').addEventListener('click', ()=>{ if(++viewMonth > 11){ viewMonth=0; viewYear++; } renderCalendar(); });
    document.getElementById('todayBtn').addEventListener('click', ()=>{ viewYear=today.getFullYear(); viewMonth=today.getMonth(); renderCalendar(); selectDate(ymd(today)); });


    function openBookedDayPopup(dateStr){
        const bookedDayDialog=document.getElementById('bookedDayDialog');
        const bookedDayLabel=document.getElementById('bookedDayLabel');
        const bookedDayList=document.getElementById('bookedDayList');
        const list=load().filter(a=>a.date===dateStr);
        bookedDayLabel.textContent=new Date(dateStr).toLocaleDateString(undefined,{weekday:'long', month:'long', day:'numeric', year:'numeric'});
        bookedDayList.innerHTML='';
        if(list.length===0){
        bookedDayList.innerHTML='<div style="opacity:.7">No appointments.</div>';
        } else {
        list.forEach((a,i)=>{
        const dt=new Date(`${a.date}T${a.time}`);
        const when=dt.toLocaleTimeString(undefined,{hour:'2-digit',minute:'2-digit'});
        const div=document.createElement('div');
        div.style.border='1px solid rgba(148,163,184,.25)';
        div.style.borderRadius='10px';
        div.style.padding='6px';
        div.innerHTML=`<strong>${when}</strong> - <input type="text" value="${a.name}" style="width:100px"> <em>(${a.purpose})</em>`;
        const editBtn=document.createElement('button');
        editBtn.textContent='Save';
        editBtn.className='edit-btn';
        editBtn.addEventListener('click',()=>{
        const all=load();
        const idx=all.findIndex(ap=>ap.date===a.date && ap.time===a.time && ap.name===a.name);
        if(idx>-1){
        all[idx].name=div.querySelector('input').value;
        save(all);
        renderCalendar();
        openBookedDayPopup(dateStr);
        }
        });


        const delBtn=document.createElement('button');
        delBtn.textContent='Delete';
        delBtn.className='delete-btn';
        delBtn.addEventListener('click',()=>{
        const all=load().filter(ap=>!(ap.date===a.date && ap.time===a.time && ap.name===a.name));
        save(all);
        renderCalendar();
        openBookedDayPopup(dateStr);
        });


        div.appendChild(editBtn);
        div.appendChild(delBtn);
        bookedDayList.appendChild(div);
        });
        }
        bookedDayDialog.showModal();
        }


        document.getElementById('closeBookedDay').addEventListener('click',()=>{
        document.getElementById('bookedDayDialog').close();
        });


        document.getElementById('prevBtn').addEventListener('click',()=>{if(--viewMonth<0){viewMonth=11;viewYear--;}renderCalendar();});
        document.getElementById('nextBtn').addEventListener('click',()=>{if(++viewMonth>11){viewMonth=0;viewYear++;}renderCalendar();});
        document.getElementById('todayBtn').addEventListener('click',()=>{viewYear=today.getFullYear();viewMonth=today.getMonth();renderCalendar();});


        
    // --- Init ---
    renderCalendar();
    renderSlots();
    renderList();
  })();

  </script>
</body>
</html>
