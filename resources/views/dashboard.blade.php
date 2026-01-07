<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .dashboard-header {
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .header-content h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .header-content p {
            color: #7f8c8d;
            font-size: 14px;
        }

        .header-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #c9a05c;
            color: white;
        }

        .btn-secondary:hover {
            background: #b38f4d;
            transform: translateY(-2px);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .stat-card h3 {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .stat-card .number {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .stat-card .change {
            font-size: 12px;
            color: #27ae60;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .content-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .card-header h2 {
            color: #2c3e50;
            font-size: 22px;
        }

        .search-box {
            position: relative;
            flex: 1;
            max-width: 300px;
        }

        .search-box input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            outline: none;
            border-color: #667eea;
        }

        .search-box::before {
            content: '🔍';
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
            color: #2c3e50;
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .status-confirmed {
            background: #d4edda;
            color: #155724;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-declined {
            background: #f8d7da;
            color: #721c24;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .btn-notify {
            background: #667eea;
            color: white;
        }

        .btn-notify:hover {
            background: #5568d3;
        }

        .btn-delete {
            background: #e74c3c;
            color: white;
        }

        .btn-delete:hover {
            background: #c0392b;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.active {
            display: flex;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h3 {
            color: #2c3e50;
            font-size: 24px;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #7f8c8d;
            line-height: 1;
        }

        .close-btn:hover {
            color: #2c3e50;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
            cursor: pointer;
        }

        .notification-success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
        }

        .notification-success.show {
            display: block;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .dashboard-header {
                padding: 20px;
            }

            .header-content h1 {
                font-size: 22px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box {
                max-width: 100%;
            }

            .table-container {
                overflow-x: scroll;
            }

            table {
                min-width: 600px;
            }

            th, td {
                padding: 10px;
                font-size: 13px;
            }

            .modal-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <div class="dashboard-header">
            <div class="header-content">
                <h1>💍 Wedding Admin Dashboard</h1>
                <p>Manage your wedding invitations and guests</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-secondary" onclick="openAddGuestModal()">➕ Add Guest</button>
                <button class="btn btn-primary" onclick="openNotifyAllModal()">📧 Notify All</button>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Invitees</h3>
                <div class="number" id="totalGuests">{{$guests->count()}}</div>
                <div class="change">All registered guests</div>
            </div>
            <div class="stat-card">
                <h3>Confirmed</h3>
                <div class="number" id="confirmedGuests">{{$guests->count()}}</div>
                <div class="change">✓ Attending</div>
            </div>
            <div class="stat-card">
                <h3>Pending</h3>
                <div class="number" id="pendingGuests">0</div>
                <div class="change">⏳ Awaiting response</div>
            </div>
            <div class="stat-card">
                <h3>Declined</h3>
                <div class="number" id="declinedGuests">0</div>
                <div class="change">✗ Not attending</div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="content-card">
                <div class="card-header">
                    <h2>Guest List</h2>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search guests..." onkeyup="searchGuests()">
                    </div>
                </div>

                <div class="notification-success" id="successNotification"></div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <!-- <th>Plus Ones</th>
                                <th>Status</th> -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="guestTableBody">
                           @forelse($guests as $guest)
                            <tr>
                                <td><strong>{{ $guest->name }}</strong></td>
                                <td>{{ $guest->email }}</td>
                                <td>{{ $guest->phone ?? 'N/A' }}</td>
                               
                               
                                <td>
                                    <div class="action-buttons">
                                        <button
                                            class="btn-icon btn-notify"
                                            onclick="openNotifyModal(
                                                '{{ $guest->name }}',
                                                '{{ $guest->email }}'
                                            )"
                                        >
                                            📧 Notify
                                        </button>

                                        <form action=""
                                            method="POST"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-icon btn-delete">🗑️ Delete</button>
                                        </form>
                                               </div>
                                                  </td>
                                                 </tr>
                                                 @empty
                                                  <tr>
                                       <td colspan="6" style="text-align:center; padding:20px;">
                                              No guests found.
                                            </td>
                                              </tr>
                                      @endforelse
                        </tbody>
                    </table>
                     
                </div>
                <div class="d-flex justify-content-center mt-4">
    {{ $guests->links('pagination::bootstrap-5') }}
</div>


            </div>
             
        </div>
      
    </div>

    

    <!-- Add Guest Modal -->
    <div class="modal" id="addGuestModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Guest</h3>
                <button class="close-btn" onclick="closeModal('addGuestModal')">&times;</button>
            </div>
            <form onsubmit="addGuest(event)">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" id="guestName" required>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" id="guestEmail" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" id="guestPhone">
                </div>
                <div class="form-group">
                    <label>Plus Ones</label>
                    <input type="number" id="guestPlusOnes" value="0" min="0">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select id="guestStatus">
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Add Guest</button>
            </form>
        </div>
    </div>

    <!-- Notify Single Modal -->
    <div class="modal" id="notifyModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Send Notification</h3>
                <button class="close-btn" onclick="closeModal('notifyModal')">&times;</button>
            </div>
            <form onsubmit="sendNotification(event)">
                <div class="form-group">
                    <label>To: <span id="recipientName"></span></label>
                    <input type="email" id="recipientEmail" readonly>
                </div>
                <div class="form-group">
                    <label>Subject *</label>
                    <input type="text" id="notifySubject" required value="Wedding Invitation Update">
                </div>
                <div class="form-group">
                    <label>Message *</label>
                    <textarea id="notifyMessage" required placeholder="Enter your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Send Notification</button>
            </form>
        </div>
    </div>

    <!-- Notify All Modal -->
    <div class="modal" id="notifyAllModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Send Notification to All</h3>
                <button class="close-btn" onclick="closeModal('notifyAllModal')">&times;</button>
            </div>
            <form action="{{route('send.update')}}" method="post">
            <!-- <form onsubmit="sendNotificationToAll(event)"> -->
                @csrf
                <!-- <div class="form-group">
                    <label>Send To</label>
                    <select id="notifyAllFilter">
                        <option value="all">All Guests</option>
                        <option value="confirmed">Confirmed Only</option>
                        <option value="pending">Pending Only</option>
                        <option value="declined">Declined Only</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label>Subject *</label>
                    <input type="text" name="subject" id="notifyAllSubject" required value="Important Wedding Update">
                </div>
                <div class="form-group">
                    <label>Message *</label>
                    <textarea id="notifyAllMessage" name="message" required placeholder="Enter your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Send to All</button>
            </form>
        </div>
    </div>



    <script>
        // Sample guest data
        // let guests = [
        //     { id: 1, name: 'John Doe', email: 'john@example.com', phone: '+234 801 234 5678', plusOnes: 1, status: 'confirmed' },
        //     { id: 2, name: 'Jane Smith', email: 'jane@example.com', phone: '+234 802 345 6789', plusOnes: 0, status: 'pending' },
        //     { id: 3, name: 'Mike Johnson', email: 'mike@example.com', phone: '+234 803 456 7890', plusOnes: 2, status: 'confirmed' },
        //     { id: 4, name: 'Sarah Williams', email: 'sarah@example.com', phone: '+234 804 567 8901', plusOnes: 1, status: 'declined' },
        //     { id: 5, name: 'David Brown', email: 'david@example.com', phone: '+234 805 678 9012', plusOnes: 0, status: 'pending' }
        // ];

        // let currentNotifyGuest = null;

        // // Initialize dashboard
        // function init() {
        //     renderGuestTable();
        //     updateStats();
        // }

        // // Render guest table
        // function renderGuestTable(guestsToRender = guests) {
        //     const tbody = document.getElementById('guestTableBody');
        //     tbody.innerHTML = '';

        //     guestsToRender.forEach(guest => {
        //         const row = document.createElement('tr');
        //         row.innerHTML = `
        //             <td><strong>${guest.name}</strong></td>
        //             <td>${guest.email}</td>
        //             <td>${guest.phone || 'N/A'}</td>
        //             <td>${guest.plusOnes}</td>
        //             <td><span class="status-badge status-${guest.status}">${guest.status.toUpperCase()}</span></td>
        //             <td>
        //                 <div class="action-buttons">
        //                     <button class="btn-icon btn-notify" onclick="openNotifyModal(${guest.id})">📧 Notify</button>
        //                     <button class="btn-icon btn-delete" onclick="deleteGuest(${guest.id})">🗑️ Delete</button>
        //                 </div>
        //             </td>
        //         `;
        //         tbody.appendChild(row);
        //     });
        // }

        // Update statistics
        function updateStats() {
            const total = guests.length;
            const confirmed = guests.filter(g => g.status === 'confirmed').length;
            const pending = guests.filter(g => g.status === 'pending').length;
            const declined = guests.filter(g => g.status === 'declined').length;

            document.getElementById('totalGuests').textContent = total;
            document.getElementById('confirmedGuests').textContent = confirmed;
            document.getElementById('pendingGuests').textContent = pending;
            document.getElementById('declinedGuests').textContent = declined;
        }

        // Search guests
        function searchGuests() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filteredGuests = guests.filter(guest =>
                guest.name.toLowerCase().includes(searchTerm) ||
                guest.email.toLowerCase().includes(searchTerm) ||
                (guest.phone && guest.phone.toLowerCase().includes(searchTerm))
            );
            renderGuestTable(filteredGuests);
        }

        // Add guest
        function addGuest(e) {
            e.preventDefault();
            const newGuest = {
                id: Date.now(),
                name: document.getElementById('guestName').value,
                email: document.getElementById('guestEmail').value,
                phone: document.getElementById('guestPhone').value,
                plusOnes: parseInt(document.getElementById('guestPlusOnes').value),
                status: document.getElementById('guestStatus').value
            };

            guests.push(newGuest);
            renderGuestTable();
            updateStats();
            closeModal('addGuestModal');
            showSuccess('Guest added successfully!');
            e.target.reset();
        }

        // Delete guest
        function deleteGuest(id) {
            if (confirm('Are you sure you want to remove this guest?')) {
                guests = guests.filter(g => g.id !== id);
                renderGuestTable();
                updateStats();
                showSuccess('Guest removed successfully!');
            }
        }

        // Open modals
        function openAddGuestModal() {
            document.getElementById('addGuestModal').classList.add('active');
        }

        function openNotifyModal(guestId) {
            const guest = guests.find(g => g.id === guestId);
            currentNotifyGuest = guest;
            document.getElementById('recipientName').textContent = guest.name;
            document.getElementById('recipientEmail').value = guest.email;
            document.getElementById('notifyModal').classList.add('active');
        }

        function openNotifyAllModal() {
            document.getElementById('notifyAllModal').classList.add('active');
        }

        // Close modal
        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        // Send notification
        function sendNotification(e) {
            e.preventDefault();
            const subject = document.getElementById('notifySubject').value;
            const message = document.getElementById('notifyMessage').value;
            
            // Simulate sending notification
            console.log(`Sending to ${currentNotifyGuest.email}: ${subject} - ${message}`);
            
            closeModal('notifyModal');
            showSuccess(`Notification sent to ${currentNotifyGuest.name}!`);
            e.target.reset();
        }

        // Send notification to all
        function sendNotificationToAll(e) {
            e.preventDefault();
            const filter = document.getElementById('notifyAllFilter').value;
            const subject = document.getElementById('notifyAllSubject').value;
            const message = document.getElementById('notifyAllMessage').value;

            let recipientCount = 0;
            guests.forEach(guest => {
                if (filter === 'all' || guest.status === filter) {
                    console.log(`Sending to ${guest.email}: ${subject} - ${message}`);
                    recipientCount++;
                }
            });

            closeModal('notifyAllModal');
            showSuccess(`Notification sent to ${recipientCount} guest(s)!`);
            e.target.reset();
        }

        // Show success message
        function showSuccess(message) {
            const notification = document.getElementById('successNotification');
            notification.textContent = message;
            notification.classList.add('show');
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.classList.remove('active');
            }
        }

        // Initialize on load
        init();
    </script>
</body>
</html>