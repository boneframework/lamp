import os

file_path = '/a0/usr/workdir/tickets/toscope/feature_ticket-number-tracking-0001.md'
target_path = '/a0/usr/workdir/tickets/todo/feature_ticket-number-tracking-0001.md'

with open(file_path, 'r') as f:
    content = f.read()

impl_details = """
## Technical Implementation

### Backend/PHP
- Define the path for the sequence file: `/a0/usr/workdir/tickets/sequence.txt`.
- Implement a function `getNextTicketSequence()`:
  - Check if the sequence file exists. If not, default the current number to `0`.
  - Read the file content using `file_get_contents()` and cast to `int`.
  - Increment the number by `1`.
  - Format the new number to be 4 digits using `str_pad((string)$newNumber, 4, '0', STR_PAD_LEFT)`.
  - Save the formatted number back using `file_put_contents($path, $formatted, LOCK_EX)` to ensure atomic writes.
  - Return the formatted string.

### Frontend/JS/HTML
- If using a Node.js environment for the skill script:
  - Read the file using `fs.readFileSync(path, 'utf8')`. Handle `ENOENT` by defaulting to `0`.
  - Parse as integer, increment by `1`.
  - Pad the string: `String(newNumber).padStart(4, '0')`.
  - Write back using `fs.writeFileSync(path, paddedNumber)`.
- If using a web frontend, create an API endpoint in the backend to safely fetch and increment the sequence, and call this endpoint before generating the final branch string.

"""

parts = content.split('## Developer Instructions')
new_content = parts[0] + impl_details + '## Developer Instructions' + parts[1]

with open(target_path, 'w') as f:
    f.write(new_content)

os.remove(file_path)
print(f"File updated and moved to {target_path}")
