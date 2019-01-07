import requests
loggedInUser = ""

def openChatRoom():
	option = "Enter"
	while option != 'Exit':
		user_input = input()
		inputs = user_input.split(" ")
		option = inputs[0]
		userName = inputs[1]
		if option == 'register':
			register(userName)
		if option == 'login':
			login(userName)
		if option == 'connect':
			connectToOthers(loggedInUser, userName)
	
def login(userName):
	response = requests.get("Login.php?userName=" + userName)
	print(response.text)
	global loggedInUser
	loggedInUser = userName
	displayMessage(userName)

def register(userName):
	response = requests.get("Register.php?userName=" + userName)
	print(response.text)
	login(userName)

def connectToOthers(sender, receiver):
	message = input("Enter message: ")
	response = requests.get("SendMessage.php?sender=" + sender + "&receiver=" + receiver + "&message="+message)
	print(response.text)
	displayMessage()
	
def displayMessage(userName):
	response = requests.get("DisplayMsg.php?userName=" + userName)
	print(response.text)

if __name__ == '__main__':
	openChatRoom()
