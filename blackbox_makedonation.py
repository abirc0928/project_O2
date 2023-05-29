from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/Final_Project_O2/n/make_donation.php")

input1 = driver.find_element_by_xpath('//*[@id="uname"]')
input2 = driver.find_element_by_xpath('//*[@id="utid"]')
input3 = driver.find_element_by_xpath('//*[@id="uamnt"]')
input_btn = driver.find_element_by_xpath('/html/body/center[2]/form/input[4]')


input1.send_keys("MIM")
input2.send_keys("78526492")
input3.send_keys("1500")
input_btn.click()

#driver.get("http://localhost/Final_Project_O2/n/login.php")



while True:
	pass