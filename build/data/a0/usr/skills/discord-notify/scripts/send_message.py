import sys
import json
import urllib.request

WEBHOOK_URL = "https://discord.com/api/webhooks/718153448763424820/RabiAroMtFJ13J8eKSYW-OTCst77fbc88SqoNILzrqGyT1MG7ZY6kcdSFTsm_Wg_bgEg"

def send_discord_message(message):
    data = {"content": message}
    headers = {
        "Content-Type": "application/json",
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
    }
    req = urllib.request.Request(WEBHOOK_URL, data=json.dumps(data).encode("utf-8"), headers=headers)
    try:
        with urllib.request.urlopen(req) as response:
            if response.status in (200, 204):
                print("Successfully sent message to Discord.")
            else:
                print(f"Failed to send message. Status: {response.status}")
    except Exception as e:
        print(f"Error sending message: {e}")

if __name__ == "__main__":
    if len(sys.argv) > 1:
        send_discord_message(sys.argv[1])
    else:
        print("Usage: python send_message.py 'Your message here'")
