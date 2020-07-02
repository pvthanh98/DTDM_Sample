# Quản Trị Mạng

## Proxy
### Static
```
sudo touch /etc/apt/apt.conf.d/proxy.conf

```
add the following lines
```
Acquire {
  HTTP::proxy "http://cache-st.ctu.edu.vn:3128";
  HTTPS::proxy "http://cache-st.ctu.edu.vn:3128";
}
```
Save your changes and exit the text editor.
Your proxy settings will be applied the next time you run Apt.

[Set proxy in file](https://www.serverlab.ca/tutorials/linux/administration-linux/how-to-set-the-proxy-for-apt-for-ubuntu-18-04/)
### Temporay
```
export http_proxy=http://cache-st.ctu.edu.vn:3128
export https_proxy=http://cache-st.ctu.edu.vn:3128

```
## Static IP Config
To configure your system to use static address assignment, create a netplan configuration in the file **/etc/netplan/99_config.yaml**
```
network:
  version: 2
  renderer: networkd
  ethernets:
    eth0:
      addresses:
        - 10.10.10.2/24
      gateway4: 10.10.10.1
      nameservers:
          addresses: [172.18.27.2, 172.18.27.6]
```
Then run to apply
```
sudo netplan apply

```
