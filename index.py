import socket
from datetime import datetime

# Fungsi untuk mendapatkan IP Address dan Hostname
def get_ip_and_hostname():
    hostname = socket.gethostname()  # Mendapatkan hostname
    try:
        ip_address = socket.gethostbyname(hostname)  # Mendapatkan IP Address
    except socket.gaierror:
        ip_address = "Tidak dapat menemukan IP Address"
    return hostname, ip_address

# Fungsi untuk mendapatkan waktu real-time
def get_realtime_time():
    now = datetime.now()
    formatted_time = now.strftime("%Y-%m-%d %H:%M:%S")  # Format waktu
    return formatted_time

# Main Program
if __name__ == "__main__":
    hostname, ip_address = get_ip_and_hostname()
    current_time = get_realtime_time()

    print("===================================")
    print("Hostname       :", hostname)
    print("IP Address     :", ip_address)
    print("Real-time Time :", current_time)
    print("===================================")
